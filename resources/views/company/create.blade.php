@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            @if(empty(Auth::user()->company->logo))

<img src="{{asset('avatar/man.jpg')}}"style="width: 100%;">

   @else
<img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" style="width: 100%;">
@endif
            <br><br>

            <form action="{{route('company.logo')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header">Update logo</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="company_logo"><br>
                    <button class="btn btn-dark float-right" type="submit">Update</button>
                </div>
            </div>
        </form>


        </div>

        <div class="col-md-5">
            @if(Session::has('message'))
                 <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
             <div class="card">
                <div class="card-header">Update Your Company Information</div>


                <form action="{{route('company.store')}}" method="POST">@csrf


                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" value="{{Auth::user()->company->address}}" class="form-control" name="address" >
                        @if($errors->has('address'))
                            <div class="error" style="color: red;">{{$errors->first('address')}}</div>
                        @endif

                    </div>


                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" value="{{Auth::user()->company->phone}}" class="form-control" name="phone" >
                        @if($errors->has('phone'))
                            <div class="error" style="color: red;">{{$errors->first('phone')}}</div>
                        @endif
                    </div>


                   <div class="form-group">
                        <label for="">Website</label>
                        <input type="text" value="{{Auth::user()->company->website}}" class="form-control" name="website" >
                        @if($errors->has('website'))
                            <div class="error" style="color: red;">{{$errors->first('website')}}</div>
                        @endif
                    </div>


                   <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" value="{{Auth::user()->company->slogan}}" class="form-control" name="slogan" >
                        @if($errors->has('slogan'))
                            <div class="error" style="color: red;">{{$errors->first('slogan')}}</div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control">{{Auth::user()->company->address}}</textarea>
                        @if($errors->has('description'))
                            <div class="error" style="color: red;">{{$errors->first('description')}}</div>
                        @endif
                    </div>




                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>

                </div>
            </div>

            

        </div>


</form>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">About your Company</div>
                <div class="card-body">
                                    <p> name:{{Auth::user()->company->cname}}</p>

                    <p> address:{{Auth::user()->company->address}}</p>

                    <p> phone:{{Auth::user()->company->phone}}</p>

                    <p> website:<a href="{{Auth::user()->company->website}}"> {{Auth::user()->company->website}}</a></p>

                    <p>Company slogan:{{Auth::user()->company->website}}</p>
                    <p>Company page:<a href="company/{{Auth::user()->company->slug}}">View</a></p>
                
                </div>
            </div>
        <br>
       <form action="{{route('cover.photo')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header">Update coverletter</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_photo"><br>
                    <button class="btn btn-dark float-right" type="submit">Update</button>
                </div>
            </div>
        </form>
            


        </div>

    </div>
</div>
@endsection

