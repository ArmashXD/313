@extends('layouts.app', ['activePage' => 'tokens', 'titlePage' => __('Dashboard')])


@section('content')
    <div class="content">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Purchase Token</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment Account</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Amount</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $count = 1;
                    @endphp
                        @forelse($tokens as $item)
                            <tr>

                                <td>{{$count}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$payment->payment_account}}
                                <td>{{$payment->payment_method}}</td>
                                <td>
                                    <form action="{{route('token.store')}}" method="POST">
                                        <input type="hidden" value="{{$item->price}}" name="token_amount"/>
                                        <input type="hidden" value="{{$item->id}}" name="token_id" />
                                        @csrf
                                        <button type="submit" class="btn btn-primary" >Purchase Token</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <p>No Tokens Available now</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
@endsection
