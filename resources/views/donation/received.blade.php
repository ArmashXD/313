@extends('layouts.app', ['activePage' => 'donations_received', 'titlePage' => __('Donation_received')])

@section('content')
@if(!Auth::user()->license_paid == false && !Auth::user()->child->c_id_1 == null)

    <div class="content">
        <div class="container mt-5">
            <h2 class="mb-4">Received Donations</h2>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="container">
                <p>Total Donations Received: </p>
                <p>{{Auth::user()->name}}, This are received donations</p>

            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Donation Id</th>
                    <th>Amount</th>
                    <th>Recipient Name</th>
                    <th>Method</th>
                    <th>Notes From Recipient</th>
                    <th>Donation Date</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>
                            <a data-toggle="modal" style="cursor: pointer; color: #0a6ebd" data-target="#exampleModalCenter">
                                {{$item->donations->donation_id}}
                            </a>
                        </td>
                        <td>{{$item->donations->amount / 2}} $</td>
                        <td>{{$item->donations->money->user->name}}</td>
                        <td>{{$item->donations->money->payment_method}}</td>
                        <td>{{$item->donations->money->notes}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->status}}</td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <form action="{{route('donation.submit')}}" method="POST">
                            {{$item->id}}
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Recipient: {{$item->donations->money->user->name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Payment Account: <p>{{$item->donations->money->payment_account}}</p>
                                        Amount: <p>{{$item->donations->amount}} $</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {{--                                <button type="submit" class="btn btn-primary">Send Donations</button>--}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @empty
                    <p>No donations yet :(</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @else
    @include('partials.alert')
@endif
@endsection
