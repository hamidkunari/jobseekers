@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Companies</h2>
	<div class="row">
		@foreach($companies as $company)
		<div style="margin-bottom: 10px;" class="col-md-4">

			<div class="card" style="width: 18rem;">
				@if(empty($company->logo))
fg
			<img style="height: 200px;" width="100" src="{{asset('avatar/man.jpg')}}"class="card-img-top">

			@else
			<img style="height: 200px;" width="100" src="{{asset('uploads/logo')}}/{{$company->logo}}"class="card-img-top">


			@endif
			<div class="card-body">
			<h5 class="card-title text-center">{{$company->cname}}</h5>
			
			<center><a href="{{route('company.index',[$company->id,$company->slug])}}" class="btn btn-primary">View Company</a></center>
  </div>
</div>

		</div>
		@endforeach

	</div>
	<br>
	<div class="col-md-4"></div>
			{{$companies->links()}}

</div>
@endsection