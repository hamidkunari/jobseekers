@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        
         <div class="col-md-3">
            @if(empty(Auth::user()->profile->avatar))
            <img src="{{asset('avatar/man.jpg')}}" width="100" style="width: 100%;">
            @else
            <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" width="100" style="width: 100%;">

            @endif
            <br><br>

            <form action="{{route('avatar')}}" method="post" enctype="multipart/form-data">@csrf

            <div class="card">
                <div class="card-header" style="color:black;background-color: #38c172; font-size: 20">Update profile picture</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="avatar">
                    @if($errors->has('avatar'))
                            <div class="error" style="color: red;">{{$errors->first('avatar')}}</div>
                        @endif
                    <br>
                    <button style="color:black;background-color: #38c172;" class="btn float-right" type="submit">Update</button>
                    

                </div>
            </div>
        </form>


        </div>
        
       <div class="col-md-5">
          <form action="{{route('profile.create')}}" >@csrf
        <div class="card">
        <div style="color:black;font-size: 20px; background-color: #38c172;" class="card-header">Update Your Profile</div>
     
    
       <div class="card-body">
         @if(Session::has('message'))
                 <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
        <div class="form-group">
         <label for=''>Address</label>
         <input type="text" class="form-control" value="{{Auth::user()->profile->address}}" name="address">
         @if($errors->has('address'))
                            <div class="text-danger">{{$errors->first('address')}}</div>
                        @endif
         </div>
         


        <div class="form-group">
        <label for="">Phone number</label>
        <input type="text" class="form-control" name="phone_number" value="{{Auth::user()->profile->phone_number}}">
          @if($errors->has('phone_number'))
                            <div class="text-danger">{{$errors->first('phone_number')}}</div>
                        @endif
        </div>

         <div class="form-group">
         <label for=''>Experience</label>
        <textarea name="experience" class="form-control">{{Auth::user()->profile->experience}}</textarea>
          @if($errors->has('experience'))
                            <div class="text-danger">{{$errors->first('experience')}}</div>
                        @endif
        </div>

        <div class="form-group">
         <label for=''>Bio</label>
         <input type="text" class="form-control" value="{{Auth::user()->profile->bio}}" name="bio">
             @if($errors->has('bio'))
                            <div class="text-danger">{{$errors->first('bio')}}</div>
                        @endif
        </div>

        <div class="form-group">
         <button style="color:black;background-color: #38c172;" class="btn" type="submit">Update</button>

        </div>

       </div>
   
       </div>
       
       </div>

</form>
       <div class="col-md-4">
        <div class="card" style="margin-bottom: 3px;">
         <div class="card-header" style="color:black;font-size: 20px; background-color: #38c172;">Your Information</div>
        
        <div class="card-body">

        <p style="margin-bottom: auto;">Name: {{Auth::user()->name}}</p>
        <p style="margin-bottom: auto;">Email: {{Auth::user()->email}}</p>
        <p style="margin-bottom: auto;">Address: {{Auth::user()->profile->address}}</p>
        <p style="margin-bottom: auto;">Phone: {{Auth::user()->profile->phone_number}}</p>

        <p style="margin-bottom: auto;">Gender: {{Auth::user()->profile->gender}}</p>
        <p style="margin-bottom: auto;">Experience: {{Auth::user()->profile->experience}}</p>
        <p style="margin-bottom: auto;">Bio: {{Auth::user()->profile->bio}}</p>
        <p style="margin-bottom: auto;">Member on: {{date('F d Y',strtotime(Auth::user()->created_at))}}</p>

               @if(!empty(Auth::user()->profile->cover_letter))
                    <p><a href="{{Storage::url(Auth::user()->profile->cover_letter)}}">Cover letter</a></p>
                @else
                    <p>Please upload cover letter</p>
                @endif



        </div>
       </div>
        
        <form action="{{route('cover.letter')}}" method="POST" enctype="multipart/form-data">
            @csrf
       <div class="card" style="margin-bottom: 3px;">
         <div class="card-header" style="color:black;background-color: #38c172; font-size: 20">Your Coverletter</div>
      
        <div class="card-body">

       <input type="file" class="form-control" name="cover_letter" style="margin-bottom: 3px;">
       <button style="color:black;background-color: #38c172;" class="btn" type="submit">Update</button>
        </div>
       </div>
   </form>


<form action="{{route('resume')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card">
         <div class="card-header" style="color:black;background-color: #38c172; font-size: 20">Your Resume</div>
      
        <div class="card-body">

       <input type="file" class="form-control" name="resume" style="margin-bottom: 3px;">
       <button class="btn" style="color:black;background-color: #38c172;" type="submit">Update</button>
        </div>
       </div>
</form>


        </div>
    </div>


@endsection
