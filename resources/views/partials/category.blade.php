<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Popular Categories</h2>
          </div>
        </div>
        <div class="row">
          @foreach($categories as $category)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3"  data-aos-delay="800">
            <a href="{{route('category.index',[$category->id])}}" >
             
              <h2>{{$category->name}}</h2>
              <span class="counting">{{$category->jobs->count()}}</span>
            </a>
          </div>
          @endforeach


          
        </div>

      </div>
    </div>

<style>
  div:hover{
   background-color: #38c172;
  }
  
  
</style>