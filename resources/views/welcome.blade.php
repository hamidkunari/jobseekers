<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Finder </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@include('partials.head')
    
  </head>
  <body>
  
  @include('partials.nav')

    
  
    <div style="height: 113px;"></div>
   
    <div  style="background-image: url('external/images/sn3.jpg'); background-size: 100% 500px; height: 300px; padding-top: 80px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <h1 style="color:white">Find Job</h1>
            <form action="{{route('alljobs')}}">
              <div class="row mb-3">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <input style="color:black;" type="text" required="" name="search" class="mr-3 form-control border-0 px-4" placeholder="job title, keywords or company name ">
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <div class="input-wrap">
                        <span class="icon icon-room"></span>
                      <input type="text" name="address" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" required="" placeholder="city, province or region" onFocus="geolocate()">
                      </div> 
                    </div>
                  </div>
                </div>
                <div  class="col-md-3">
                  <input style="color:black;background-color: #38c172;" type="submit" class="btn btn-search btn btn-block" value="Search">
                </div>
              </div>
             
              
            </form>
          </div>
        </div>
      </div>
    </div>
   

    <div style="margin-top: -60px;" class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Popular Categories</h2>
          </div>
        </div>
        <div style="margin-top: -40px;" class="row">
          
           @foreach($categories as $category)
       
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3"  data-aos-delay="800">
            <a id="style" href="{{route('category.index',[$category->id])}}" class="h-100 feature-item">
             
              <h2 style="font-family: bold; font-size: 20px;">{{$category->name}}</h2>
              <span  class="counting">{{$category->jobs->count()}}</span>
            </a>
          </div>

          @endforeach
        </div>

      </div>
    </div>


    <div style="margin-top: -70px;" class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div style="margin-top: -80px;" class="col-md-12 mb-5 mb-md-0"  data-aos-delay="100">
            <h2 class="mb-5 h3">Recent Jobs</h2>
            <div class="rounded border jobs-wrap">
                @foreach($jobs as $job)

              <a href="{{route('jobs.show',[$job->id,$job->slug])}}" class="job-item d-block d-md-flex align-items-center  border-bottom @if($job->type=='parttime') partime @elseif($job->type=='fulltime')fulltime @else freelance   @endif;">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  @if(!empty($job->company->logo))
                  <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" alt="Image" class="img-fluid mx-auto">
                  @else
              <img src="{{asset('avatar/man.jpg')}}" alt="Image" class="img-fluid mx-auto">
                  @endif
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>{{$job->position}}</h3>
                    <div class="d-block d-lg-flex">
                      <div style="color:black;" class="mr-3"><span class="icon-suitcase mr-1"></span> {{$job->company->cname}}</div>
                      <div style="color:black;" class="mr-3"><span class="icon-room mr-1"></span> {{str_limit($job->address,20)}}</div>
                      <div style="color:black;"><span class="icon-money mr-1"></span>{{$job->salary}}</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  @if($job->type=='fulltime')
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">{{$job->type}}</span>
                  </div>
                  @elseif($job->type=='parttime')
                  <div class="p-3">
                    <span class="text-danger p-2 rounded border border-danger">{{$job->type}}</span>
                  </div>
                  @else
                   <div class="p-3">
                    <span class="text-warning p-2 rounded border border-warning">{{$job->type}}</span>
                  </div>
                  @endif

                </div>  
              </a>

            @endforeach


            </div>

            <div class="col-md-12 text-center mt-5">
              <a style="color:black;background-color: #38c172;" href="{{route('alljobs')}}" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
            </div>
          </div>
          




            </div>

          </div>
        </div>
      </div>
    </div>

    <div style="margin-top: -180px;" class="site-section" >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="external/images/hero_2.jpg" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          </div>
          <div style="margin-top: -50px;" class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>Testimonies</h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
            
           
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover  inner-page" style="background-image: url('external/images/sn2.jpg'); background-size: 100% 300px; margin-top: -80px;"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div style="color:black" class="col-md-6 text-center" >
            <h1 class="h3 mb-0" style="color:black">Your Dream Job</h1>
            <p class="h3  mb-5" style="color:black">Is Waiting For You</p>
            <div class="col-lg-12">
            <p><a style="color:black;" href="{{route('register')}}" class="btn btn-outline-success py-3 px-4">Job Seeker</a> <a href="{{route('employer.register')}}" class="btn  py-3 px-4" style="color:black; background-color: #38c172;">Employer</a>
          
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <div style="margin-top: -60px; margin-bottom: -50px;"  class="site-section site-block-feature bg-light">
      <div  class="container">
        
        <div style="margin-top: -70px; margin-bottom: -40px;" class="text-center mb-5 section-heading">
          <h2>Why Choose Us</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div style="margin-bottom:50px;" class="text-center p-4 item border-right" >
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">More Jobs Every Day</h2>
            <p style="color:black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item" >
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Creative Jobs</h2>
            <p style="color:black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right" >
            <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Healthcare</h2>
            <p style="color:black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item" >
            <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Finance &amp; Accounting</h2>
            <p style="color:black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    



          @include('partials.blog')
           @include('partials.footer')
      
       
    


    
  </body>
</html>

<style>
  #style:hover{
  background-color: #38c172;
}
#style span:hover{
  background-color: black;
}


</style>