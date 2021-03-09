@extends('layouts.app', ['activePage' => 'Donations_sent', 'titlePage' => __('Donations_sent')])

@section('content')
@if(!Auth::user()->license_paid == false && !Auth::user()->child->c_id_1 == null)


    <div class="content">
        <div class="container mt-5">
            <h2 class="mb-4">Donations</h2>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="container">
                <p>Total Donations Sent: </p>
                <p>{{Auth::user()->name}}, In the event you were not properly informed, All Donations Are To Be Sent Immediately. There Is No Grace Period.</p>
                <p>Here's how you do it: </p>
                <ul>
                    <li>Click on a <strong>Donation ID</strong> Number below and a pop-up box will open.</li>
                    <li>You will see <strong>Recipient's Accepted Payment Methods</strong> click on it to see send methods.</li>
                    <li>Choose a method and login to your personal electronic account and send your Donation.</li>
                    <li>When your Donation is sent copy the reference number.</li>
                </ul>

            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Donation Id</th>
                    <th>Amount</th>
                    <th>Recipient Name</th>
                    <th>Method</th>
                    <th>Donation Date</th>
                    <th>Receipt Date</th>
    {{--                    <th>Action</th>--}}
                </tr>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>
                        <a data-toggle="modal" style="cursor: pointer; color: #0a6ebd" data-target="#exampleModalCenter{{$item->id}}">
                            {{$item->donation_id}}
                        </a>
                        </td>
                        <td>{{$item->amount}} $</td>
                        <td>{{$item->money->user->name}}</td>
                        <td>{{$item->money->payment_method}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
{{--                            <form action="{{ route('donation.destroy' , $item->id)}}" method="POST">--}}
{{--                                <input name="_method" type="hidden" value="POST">--}}
{{--                                {{ csrf_field() }}--}}

{{--                                <div class="modal-footer no-border">--}}
{{--                                    <button type="submit" disabled class="btn btn-primary"><i class="fa fa-trash" data-toggle="model1"></i></button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <form action="{{route('donation.submit')}}" method="POST">
                        @csrf
                            <input type="hidden" name="id" value="{{$item->money->user->id}}"/>
                            <input type="hidden" value="{{$item->id}}" name="donation_id" />
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Recipient: {{$item->money->user->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   Payment Account: <p>{{$item->money->payment_account}}</p>
                                   Amount: <p>{{$item->amount}} $</p>
                                   User-name: <p>{{$item->user->name}}</p>
                                   User-email: <p>{{$item->user->email}}</p>
                                    <input type="hidden" value="{{$item->user->id}}" name="user_id"/>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send Donations</button>
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
