

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <form action="{{route('alljobs')}}" method="GET">

    <div class="form-inline">
        <div class="form-group">
            <label>Position&nbsp;</label>
            <input type="text" name="position" class="form-control" placeholder="job position">&nbsp;&nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>Empl&nbsp;</label>
            <select class="form-control" name="type">
                    <option value="">-select-</option>
                    <option value="fulltime">fulltime</option>
                    <option value="parttime">parttime</option>
                    <option value="casual">casual</option>
                </select>
                &nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>category&nbsp;</label>
            <select name="category_id" class="form-control">
                <option value="">-select-</option>

                    @foreach(App\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                &nbsp;&nbsp;
        </div>

        <div class="form-group">
            <label>address&nbsp;</label>
            <input type="text" name="address" class="form-control" placeholder="address">&nbsp;&nbsp;
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-search btn-success btn-block" value="Search">

        </div>
    </div>    <br>

    </form>
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
<div class="text-center" style="margin-left: 350px;">
{{ $jobs->links() }}
</div>
</div>
</div>

@endsection

