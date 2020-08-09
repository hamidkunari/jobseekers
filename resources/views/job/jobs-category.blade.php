

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
   <h1>
       
       {{$categoryName->name}}
    
   </h1>
    
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
        <td> <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" alt="external/images/company_logo_blank.png" class="img-fluid mx-auto" style="height: 50px; width: 50px; border-radius: 50px;"></td>
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
<div class="text-center" style="margin-left: 350px;">
{{ $jobs->links() }}
</div>
</div>
</div>

@endsection

