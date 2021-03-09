@extends('admin.layouts.admin_app', ['activePage' => 'tickets', 'titlePage' => __('User Profile')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="card-title"><h3>Level</h3></div>
                </div>
                <div class="card-body">

                        <div class="modal-body">
                            <form action="{{route('levels.update',$level->id)}}" method="POST">
                                @csrf
                                @method('put')
                                <input class="form-control" name="name" value="{{$level->name}}"/>
                                <input class="form-control" name="admin_commission"
                                       value="{{$level->admin_commission}}"/>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
