@extends('layouts.app')
@section('content')
   <div class="album text-muted">
     <div class="container">
      @if(Session::has('message'))

      <div class="alert alert-success">{{Session::get('message')}}</div>
      @endif
        @if(Session::has('err_message'))

      <div class="alert alert-danger">{{Session::get('err_message')}}</div>
      @endif
      @if(isset($errors)&&count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>

      @endif

       <div class="row" id="app">
          
                
        

     
          <div class="col-lg-8">
            <div style="background-color: #38c172 ; color:black; border-radius: 3px; padding-left: 5px;">
            <h2>{{$job->title}}</h2> 
            </div>
            
            <div class="p-4 mb-8 bg-white">
              <!-- icon-book mr-3-->
              <h3 class="h5 text-black mb-3"><i class="fa fa-book" style="color: #2E86C1;">&nbsp;</i>Description <a href="#"data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-envelope-square" style="font-size: 34px;float:right;color:green;"></i></a></h3>
              <p> {{$job->description}}.</p>
              
            </div>
            <div class="p-4 mb-8 bg-white">
              <!--icon-align-left mr-3-->
              <h3 class="h5 text-black mb-3"><i class="fa fa-user" style="color: #2E86C1;">&nbsp;</i>Roles and Responsibilities</h3>
              <p>{{$job->roles}} .</p>
              
            </div>
            <div class="p-4 mb-8 bg-white">
              <h3 class="h5 text-black mb-3"><i class="fa fa-users" style="color: #2E86C1;">&nbsp;</i>Number of vacancy</h3>
              <p>{{$job->number_of_vacancy }} .</p>
              
            </div>
            <div class="p-4 mb-8 bg-white">
              <h3 class="h5 text-black mb-3"><i class="fa fa-clock-o" style="color: #2E86C1;">&nbsp;</i>Experience</h3>
              <p>{{$job->experience}}&nbsp;years</p>
              
            </div>
            <div class="p-4 mb-8 bg-white">
              <h3 class="h5 text-black mb-3"><i class="fa fa-venus-mars" style="color: #2E86C1;">&nbsp;</i>Gender</h3>
              <p>{{$job->gender}} </p>
              
            </div>
            <div class="p-4 mb-8 bg-white">
              <h3 class="h5 text-black mb-3"><i class="fa fa-dollar" style="color: #2E86C1;">&nbsp;</i>Salary</h3>
              <p>{{$job->salary}}</p>
            </div>

          </div>

          
            <div class="col-md-4 p-4 site-section bg-light">
             <div style="background-color: #38c172 ; color:black; border-radius: 3px; padding-left: 5px; height: 35px; margin-top: -23px; padding-top: 5px;"><h4>Short Info</h4></div>
                  <p>Company name:{{$job->company->cname}}</p>
                <p>Address:{{$job->address}}</p>
                    <p>Employment Type:{{$job->type}}</p>
                    <p>Position:{{$job->position}}</p>
                    <p>Posted:{{$job->created_at->diffForHumans()}}</p>
                    <p>Last date to apply:{{ date('F d, Y', strtotime($job->last_date)) }}</p>



              <p><a href="{{route('company.index',[$job->company->id,$job->company->slug])}}" class="btn btn-success" style="width: 100%;">Visit Company </a></p>
              <p>

        @if(Auth::check() &&Auth::user()->user_type='seeker')
        @if(!$job->checkApplication() )
        <form action="{{route('apply',[$job->id])}}">
        <button  type="submit" class="btn btn-success" style="width: 100%;">Apply</button>
       </form>
       @else
       <button  type="submit" class="btn btn-warning" style="width: 100%;">Application Submitted</button>
            @endif
            @endif

              </p>

</div>

@foreach($jobRecommendations as $jobRecommendation)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="badge badge-success">{{$jobRecommendation->type}}</p>
    <h5 class="card-title">{{$jobRecommendation->position}}</h5>
    <p class="card-text">{{str_limit($jobRecommendation->description,90)}}
   <center> <a href="{{route('jobs.show',[$jobRecommendation->id,$jobRecommendation->slug])}}" class="btn btn-success">Apply</a></center>
  </div>
</div>
@endforeach




<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #38c172 ; color:black; height: 45px; ">
        <h5 style="" class="modal-title" id="exampleModalLabel">Send job to your friend</h5>
        <button style="padding-top: -20px;"  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="margin-top: -10px;" aria-hidden="true">&times;</span>
        </button>
      </div>      
      <form action="{{route('mail')}}" method="">@csrf

      <div class="modal-body">
        <input type="hidden" name="job_id" value="{{$job->id}}">
        <input type="hidden" name="job_slug" value="{{$job->slug}}">

        <div class="form-goup">
          <label>Your name * </label>
          <input type="text" name="your_name" class="form-control" required="">
        </div>
        <div class="form-goup">
          <label>Your email *</label>
          <input type="email" name="your_email" class="form-control" required="">
        </div>
        <div class="form-goup">
          <label>Person name *</label>
          <input type="text" name="friend_name" class="form-control" required="">
        </div>
        <div class="form-goup">
          <label>Person email *</label>
          <input type="email" name="friend_email" class="form-control" required="">
        </div>
        
      </div>
      <div class="modal-footer">
        <button style="background-color: black" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn" style="background-color: #38c172 ; color:black;">Mail this job</button>
      </div>
    </form>
    </div>
  </div>
</div>
               </div>
       

<br>
<br>
<br>

     </div>
   </div>
@endsection
