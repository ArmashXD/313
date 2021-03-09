@extends('layouts.app', ['activePage' => 'assigned_token', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
    <div class="container-fluid">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="card">
            <div class="card-header">Assigned Tokens</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gift</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    @php
                        $count = 1;
                    @endphp
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$child1->getChildOne->name ?? ''}}</td>
                            <td>{{$child1->getChildOne->email ?? ''}}</td>
                        <td>
                        <form action="{{route('token.gift')}}" method="POST">
                        @csrf
                            <input type="hidden" name="name" value="{{auth()->user()->name}}"/>
                            <input type="hidden" name="gift_to" value="{{$child1->getChildOne->id ?? ''}}" />
                            <input type="hidden" name="user_id" value="{{$child1->getChildOne->id ?? ''}}" />
                            
                            <button class="btn btn-primary">Gift Token</button>
                        </form>
                           </td>
                       </tr>
                       <tr>
                        <td>{{$count++}}</td>
                        <td>{{$child1->getChildTwo->name ?? ''}}</td>
                        <td>{{$child2->getChildTwo->email ?? ''}}</td>
                    <td>
                    <form action="{{route('token.gift')}}" method="POST">
                        <input type="hidden" name="name" value="{{auth()->user()->name}}"/>
                        <input type="hidden" name="gift_to" value="{{$child2->getChildTwo->id ?? 0}}" />
                        <input type="hidden" name="user_id" value="{{$child1->getChildOne->id ?? ''}}" />

                        @csrf
                   <button class="btn btn-primary">Gift Token</button>
                    </form>
                       </td>
                   </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Gifted Tokens
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <th>
                                Gifted To
                            </th>
                            <th>
                                Token Name
                            </th>
                            <th>
                                Code
                            </th>
                            <th>
                                At
                            </th>
                        </thead>
                        <tbody>
                            @forelse ($giftedTokens as $item)
                            <tr>
                                <td>
                                    {{$item->user->name}}
                                </td>   
                                <td>
                                    {{$item->token->name}}
                                </td>
                                <td>
                                    {{$item->token->code}}
                                </td>
                                <td>
                                    {{$item->created_at}}
                                </td>
                            </tr>
                            @empty
                            <p>No Gifted Tokens</p>
                                @endforelse
                        </tbody>
                    </table>
                        
                </div>

                </div>
        </div>
    </div>
    </div>
@endsection
