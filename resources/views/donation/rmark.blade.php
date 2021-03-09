@extends('layouts.app', ['activePage' => 'Received', 'titlePage' => __('Received')])

@section('content')
@if(!Auth::user()->license_paid == false && !Auth::user()->child->c_id_1 == null)

    <div class="content">
        <div class="container mt-5">
            <h2 class="mb-4">Mark Donations</h2>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="container">
                <p>{{Auth::user()->name}}, this is where you find out who has sent Donations to you. To see a historical record of every Donation you have received, please <a href="{{route('donation.received')}}">Click here.</a></p>
                <p>Here's how you do it: </p>
                <ul>
                    <li>You should add your Preferred Receipt Method(s) by clicking here <a href="{{route('money.index')}}">Add Method</a> if you haven't done so yet. This lets people know how to send you a Donation prior to contacting you.</li>
                    <li>When receiving a Donation simply click on the Donation Id to Mark Received.</li>
                    <li>Choose a method and login to your personal electronic account and send your Donation.</li>
                    <li><strong>NOTE:</strong> Immediately mark your Donation received after you've received it and ONLY mark a Donation received when you have actually received it.</li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Donation Id</th>
                    <th>Amount</th>
                    <th>Recipient Name</th>
                    <th>Method</th>
                    <th>Notes From Recipient</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>
                            <a data-toggle="modal" style="cursor: pointer; color: #0a6ebd" data-target="#exampleModalCenter{{$item->id}}">
                                {{$item->donations->donation_id}}
                            </a>
                        </td>
                        <td>{{$item->donations->amount / 2}} $</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->donations->money->payment_method}}</td>
                        <td>{{$item->donations->money->notes}}</td>
                        <td>{{$item->status}}</td>
                        <td></td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <form action="{{route('received.status')}}" method="POST">
                          @csrf
                            <input name="id" value="{{$item->id}}" type="hidden"/>
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
                                        <select name="status" class="form-control">
                                            <option>Change status</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Sended">Received</option>
                                        </select>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Change Status</button>
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
