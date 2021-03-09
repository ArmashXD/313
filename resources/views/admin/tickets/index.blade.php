@extends('admin.layouts.admin_app', ['activePage' => 'tickets', 'titlePage' => __('User Profile')])

@section('content')
    <div class="content">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="card-title"><h3>Complaints</h3></div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>From User</th>
                                <th>Complain</th>
                                <th>Your Reply</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @forelse($tickets as $item)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td>{{$item->user->email}}</td>
                                    <td>{{$item->complain}}</td>
                                    <td>{{$item->reply ?? 'No Reply'}}</td>
                                    <td><a href="{{route('tickets.edit',$item->id)}}" class="btn btn-info">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                        <form action="{{route('tickets.destroy',$item->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <p>No Complains</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
