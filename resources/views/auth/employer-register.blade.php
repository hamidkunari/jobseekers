@extends('layouts.main')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
          <div class="col-md-12">
       <h1 style="margin-top: -55px;padding-left: 10px; height: 50px; border-radius: 5px; background-color: #38c172;">Employer Registration</h1>
      </div>


    <div  class="site-section bg-light">
      <div class="container">
        <div class="row">
       @if(Session::has('message'))
                 <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

          <div style="margin-top: -100px;" class="col-md-12 col-lg-8 mb-5">
          
            <form method="POST" action="{{route('emp.register')}}" class="p-5 bg-white">
                        @csrf

                        <input type="hidden" value="employer" name="user_type">                <div class="form-group row">
                    
                            <div  class="col-md-12">Company name</div>

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Company name" class="form-control{{ $errors->has('cname') ? ' is-invalid' : '' }}" name="cname" value="{{ old('cname') }}" required autofocus>

                                @if ($errors->has('cname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                    
                            <div class="col-md-12">Email</div>

                            <div class="col-md-12">
                                <input id="email" type="text" placeholder="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        


                        <div class="form-group row">
                    
                            <div class="col-md-12">Password</div>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">Confirm password</div>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                       




              <div class="row form-group">
                <div class="col-md-12">
                  <input style="background-color: #38c172;" type="submit" value="Register as Employer" class="btn   py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            
            
            <div style="margin-top: -100px;" class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Once you create an account a verification link will be sent to your email.</p>
              <p><a style="background-color: #38c172; color:black" href="#" class="btn  py-2 px-4">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>



     </div>
   </div>
@endsection

<style>
  div{
 color: black; font-size: 20px; font-family: bold;
}
</style>