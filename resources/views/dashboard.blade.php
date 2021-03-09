@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
    @if(!auth()->user()->license_paid == 0 && !auth()->user()->child->c_id_1 == null)
        <div class="container-fluid">
            <h3>Welcome {{auth()->user()->name}}  Level:{{auth()->user()->level_id }} /{{auth()->user()->level->name}} / Donation Key: {{auth()->user()->reference_key}}</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Received Amount</h4>
                            <p class="card-category">
                                <span class="text-success"><i class="fa fa-money"></i>  {{ $donations ?? "No Received Amount"}}</span></p>
                        </div>
                        <div class="card-footer">
                            <h4>Donations To Send</h4>
                            <div class="stats">
                                <a href="{{route('donation.sent')}}" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Total Donations sent</h4>
                            <p class="card-category">
                                <span class="text-success"><i class="fa fa-chart"></i> {{$recieved ?? 'Not Received'}} </span></p>

                        </div>
                        <div class="card-footer">
                            <h4>Donations To Mark Recieved</h4>
                            <div class="stats">
                                <a href="{{route('donation.received')}}" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">My Team Members</h4>
                            <p class="card-category">{{$team}}</p>
                        </div>
                        <div class="card-footer">
                            <h4>Currency Converter</h4>
                            <div class="stats">
                                <a href="{{route('team.index')}}" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @if(auth()->user()->level_count == 5)
                    <div class="container">
                        <div class="alert alert-success">
                            Your Maximum Donation Has Reached you can now upgrade your level
                            {{-- <a href="{{route('level.upgrade')}}">
                            </a> --}}

                        </div>
                    </div>
                @endif
            <form action="">

            </form>
        </div>
    @else
        <div class="container-fluid">
            @if(!auth()->user()->license_paid == true)
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">License Fee</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Payment Account</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                $count = 1;
                                @endphp
                                @foreach($payment as $item)
                                    <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$item->payment_method}}</td>
                                    <td>{{$item->payment_account}}</td>
                                    <td>10 $</td>
                                    <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Submit Fee Using Token</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="{{route('tokenlicense.store')}}" method="POST">
                                                    @csrf
                                                    <input type="number" class="form-control" name="code"/>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary">Submit Fee</button>
                                        </form>

                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                    <form action="{{route('license.store')}}" method="POST">
                                        @csrf
                                            <button class="btn btn-primary">Submit Fee</button>
                                    </form>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
            @endif
                @include('partials.alert')
            @endif
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
