@extends('layouts.app')

@section('content')
<div class="container">
    
    
    <div class="card">
    <div class="card-header" style="font-size: 22px; height: 50px; padding-bottom:: 10px;">Applicants</div></div>
    <br>
    
    <div class="row justify-content-center">
        <div class="col-md-12">       
          @foreach($applicants as $applicant)

            <div class="card" style="width: 100%">
                <div class="card-header"><a href="{{route('jobs.show',[$applicant->id,$applicant->slug])}}"> {{$applicant->title}}</a></div>

                <div class="card-body">
                   
                       
            <table class="table">
            <thead class="bg bg-success">
              <tr>
              <th>Photo</th>
              <th>Name</th>
              <th >Email</th>
              <th >Address</th>
              <th >Gender</th>
              
              <th>Bio</th>
              <th>Phone</th>
              <th>Resume</th>
             

              
            </tr>
            </thead>
             @foreach($applicant->users as $user)
            <tbody>
            <tr>
                <td>
                    @if($user->profile->avatar)
                        <img src="{{asset('uploads/avatar')}}/{{$user->profile->avatar}}" width="80">
                    @else
                    <img src="{{asset('uploads/avatar/man.jpg')}}" width="80">
                    @endif

            <br>Applied on:{{ date('F d, Y', strtotime($applicant->created_at)) }}
                </td>
              <td>{{$user->name}}</td>
      <td >{{$user->email}}</td>
      <td >{{$user->profile->address}}</td>
      <td>{{$user->profile->gender}}</td>
      
      <td>{{$user->profile->bio}}</td>
      <td>{{$user->profile->phone_number}}</td>

      <td><a href="{{Storage::url($user->profile->resume)}}">Resume</a></td>

      
      <td></td>

    </tr>
    
  </tbody>
    @endforeach
</table>

                   </div><br><br>
                  
                </div> 
                <br>
                 @endforeach


            </div>

        </div>
    </div>
 
</div>

<style type="text/css">
  table {
    
    
}
</style>
@endsection