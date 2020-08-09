<div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Recent Blog</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">
          

      
            @foreach($posts as $post)
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="{{route('post.show',[$post->id,$post->slug])}}" class="image-play">
                  <img style="height: 200px; border-radius: 3px;" src="{{asset('storage/'.$post->image)}}" alt="" class="img-fluid img-thumbnail">
                
              </div>
              <h5><a style="color:black; background-color: white;" href="#">{{$post->title}}</a></h5>
              <span style="color:black" class="mb-3 d-block post-date">Post {{$post->created_at->diffForHumans()}}</span>
              <p style="color:black;">{{str_limit($post->content,150)}}</p>
            </div>
            @endforeach
          
            
          
         
          
          
        </div>

        <div class="row">
          
        </div>
      </div>
    </div>
    

