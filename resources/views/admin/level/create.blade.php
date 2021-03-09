@extends('admin.layouts.admin_app', ['activePage' => 'level', 'titlePage' => __('Dashboard')])
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <div class="card-title card-header-primary">
                Add A New Level
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('levels.store')}}">
                @csrf
                <input class="form-control" name="name" placeholder="Enter Level Name"/>
                <input class="form-control" name="admin_commission" placeholder="Enter Admin Commission"/>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection
