@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="company-profile">
            @if(empty($company->cover_photo))
        <img src="{{asset('cover/tumblr-image-sizes-banner.png')}}" >
        @else
        <div class="company-desc">
        <img  style="height: 200px; width: 100%" src="{{asset('uploads/coverphoto')}}/{{$company->cover_photo}}" width="100">
        @endif

        
        <h1>{{$company->cname}}</h1>
        <p><strong>Slogan</strong>
        	{{$company->slogan}}&nbsp;
        	Address-{{$company->address}}&nbsp;
        	Phone-{{$company->phone}}&nbsp;
            Website-{{$company->website}}</p>

</div>
</div>
<table class="table">
<thead>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>




</thead>
<tbody>
    @foreach($company->jobs as $job)
    <tr>
        <td> @if(empty(Auth::user()->company->logo))

<img src="{{asset('avatar/man.jpg')}}" style="width: 100px; height: 50px;">

   @else
<img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" style="width: 100px; height: 70px; border-radius: 50px;">
@endif</td>
        <td>Postion:{{$job->position}}</br>
         <i class="fa fa-clock-o" aria-hidden="true">&nbsp; {{$job->type}}</i>
        </td>
        <td><i class="fa fa-map-marker" aria-hidden="true"></i>Address:{{$job->address}}</td>
        <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
        Date:{{$job->created_at->diffForHumans()}}</td>
        <td>
             <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
            <button class="btn btn-success btn-ssm">Apply</button>
</a>
        </td>
    </tr>
@endforeach
</tbody>
</table>


    </div>
</div>
@endsection
<style>
	.fa{
		color:#58ACFA;
	}

</style>
