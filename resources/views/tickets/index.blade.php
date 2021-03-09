@extends('layouts.app', ['activePage' => 'ticket', 'titlePage' => __('User Profile')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="card-title"><h3>Complaints</h3></div>
            </div>
                <div class="card-body">
                    <form method="POST" action="{{route('ticket.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Complaint</label>
                            <textarea rows="10" cols="10" class="form-control" name="complain"></textarea>
                        </div>
                </div>
                <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Your Complain</th>
                    <th>Admin Reply</th>
                </tr>
                </thead>
                <tbody>
                @php
                $count = 1;
                @endphp
                @forelse($ticket as $item)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$item->complain}}</td>
                        <td>{{$item->reply ?? 'No Reply'}}</td>
                    </tr>
                    @empty
                    <p>No Complains</p>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection
