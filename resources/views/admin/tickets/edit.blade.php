@extends('admin.layouts.admin_app', ['activePage' => 'tickets', 'titlePage' => __('User Profile')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="card-title"><h3>Complaints</h3></div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('tickets.update',$ticket->id)}}">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>Complain</label>
                            <input type="text" class="form-control" disabled value="{{$ticket->complain}}"/>

                        </div>
                        <div class="form-group">
                            <label>Your Reply</label>
                            <textarea rows="10" cols="10" class="form-control" name="reply"></textarea>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
