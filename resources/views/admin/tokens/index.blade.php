@extends('admin.layouts.admin_app', ['activePage' => 'tokens', 'titlePage' => __('Table List')])
@section('content')
<div class="content">
        <div class="container-fluid">
            <a href="{{route('tokens.create')}}" class="btn btn-primary">Add New</a>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Tokens</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Token Name</th>
                                        <th>Code</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $count = 0;
                                    @endphp
                                    @forelse($tokens as $item)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->code}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>
                                                <form method="POST" action="{{route('tokens.destroy',$item->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty                                    <p>Please generate a token for users</p>

                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Purchased Tokens</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Purchased By</th>
                                        <th>Token</th>
                                        <th>User Purchased Status</th>
                                        <th>Change Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $count = 0;
                                    @endphp
                                    @forelse($purchasedTokens as $item)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td>{{$item->user->name}}</td>
                                            <td>{{$item->token->name}}</td>
                                            <td><span class="{{$item->active == true  ? 'badge badge-success' : 'badge badge-danger'}}">{{$item->active == true ? 'Activated' : 'Not Activated'}}</span> </td>
                                                <td><button class="{{$item->admin_status == true ? 'btn btn-success' : 'btn btn-danger'}}" data-toggle="modal" style="cursor: pointer; color: #FFF; font-size: 0.8rem" data-target="#exampleModalCenter{{$item->id}}">
                                                    {{$item->admin_status == false ? 'UNPAID' : 'PAID'}}
                                                </button></td>                              
                                                <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <form action="{{route('change-token')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{$item->id}}" name="token_id" />
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Please Change the Status, If the Token is Purchased.</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <select name="active" class="form-control">
                                                                            <option value="">Please Select Status</option>
                                                                            <option value="1">PAID</option>
                                                                            <option value="0">UNPAID</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                   <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </tr>
                                           
                                        @empty
                                        <tr>
                                            
                                    <td>No token Purchased by users</td>
                                </tr>
                        
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
