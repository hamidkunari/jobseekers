@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            @if(Session::has('message'))
                 <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
            <div class="card-header">Create a job</div>
            <div class="card-body">

            <form action="{{route('job.store')}}" method="POST">@csrf

            <div class="form-group">
         <label for=''>Title</label>
         <input type="text" class="form-control"  name="title">
         @if($errors->has('title'))
                            <div class="text-danger">{{$errors->first('title')}}</div>
                        @endif
         </div>


            
            <div class="form-group">
         <label for=''>Description</label>
         <input type="text" class="form-control"  name="description">
         @if($errors->has('description'))
                            <div class="text-danger">{{$errors->first('description')}}</div>
                        @endif
         </div>

            <div class="form-group">
                <label for="role">Role:</label>
            <textarea name="roles"  class="form-control" >{{old('roles')}}</textarea>
            @if($errors->has('roles'))
                            <div class="text-danger">{{$errors->first('roles')}}</div>
               @endif
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" class="form-control">
                    @foreach(App\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control" >
                @if($errors->has('position'))
                            <div class="text-danger">{{$errors->first('position')}}</div>
               
                @endif

            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control"  value="{{ old('address') }}">
                @if ($errors->has('address'))
              
                            <div class="text-danger">{{$errors->first('address')}}</div>
                 @endif
            </div>

            <div class="form-group">
                <label for="experience">Year of experience:</label>
                <input type="text" name="experience" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}"  value="{{ old('experience') }}">
                @if ($errors->has('experience'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('experience') }}</strong>
                </span>
                 @endif
            </div>

              <div class="form-group">
                <label for="type">Gender:</label>
                <select class="form-control" name="gender">
                    <option value="any">Any</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>

               <div class="form-group">
                <label for="type">Salary/year:</label>
                <select class="form-control" name="salary">
                    <option value="negotiable">Negotiable</option>
                    <option value="2000-5000">2000-5000</option>
                    <option value="50000-10000">5000-10000</option>
                    <option value="10000-20000">10000-20000</option>
                    <option value="30000-500000">50000-500000</option>
                    <option value="500000-600000">500000-600000</option>

                    <option value="600000 plus">600000 plus</option>
                </select>
            </div>




           


           
 



            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" name="type">
                    <option value="fulltime">fulltime</option>
                    <option value="parttime">parttime</option>
                    <option value="casual">casual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status">
                    <option value="1">live</option>
                    <option value="0">draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastdate">Last date:</label>
                <input type="date" id="lastdate"  name="last_date" class="form-control {{ $errors->has('last_date') ? ' is-invalid' : '' }}"  value="{{ old('last_date') }}">
                @if ($errors->has('last_date'))
                <div class="text-danger">{{$errors->first('last_date')}}</div>
                 @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
             



        </div>
    </form>
    </div>
    </div>
    </div>
</div>

@endsection
