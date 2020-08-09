

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <h1>Recent Jobs</h1>
<table class="table">
<thead>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>




</thead>
<tbody>
    @foreach($jobs as $job)
    <tr>
        <td><img src="{{asset('avatar/man.jpg')}}" width="80"></td>
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

<div class="col-md-12 text-center mt-5" style="margin-bottom: 10px;">
              <a href="{{route('alljobs')}}" class="btn btn-success rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
            </div>









</div>
</div>

<div class="container">
    <div class="row">

@foreach($companies as $company)
<div class="col-md-3" style="">
<div class="card" style="width: 18rem; width: 220px;">
  @if(empty($company->logo))

<img src="{{asset('avatar/man.jpg')}}" style="width: 210px; height: 70px; padding-left: 7px; padding-top: 4px; border-radius: 3px;">

   @else
<img src="{{asset('uploads/logo')}}/{{$company->logo}}" style="width: 210px; height: 70px; padding-left: 7px; padding-top: 4px; border-radius: 3px;">
@endif
  <div class="card-body">
    <h5 class="card-title">{{$company->cname}}</h5>
    <p class="card-text">{{str_limit($company->description, 20)}}</p>
    <a  href="{{route('company.index',[$company->id,$company->slug])}}" class="btn btn-success" style="width:180px; ">Visit Company</a>
  </div>
</div>
</div>
@endforeach

</div>
</div>

@endsection

