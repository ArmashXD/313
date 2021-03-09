@extends('admin.layouts.admin_app', ['activePage' => 'commission', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>User Level</th>
                        <th>Your Commission</th>
                   </tr>
                    </thead>
                    <tbody>
                    @php
                        $count = 0;
                    @endphp
                    @forelse($commission as $item)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->level->name}}</td>
                            <td>{{$item->level->admin_commission}}</td>
                        </tr>
                    @empty
                        <p>No Commissions yet</p>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
