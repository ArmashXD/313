@extends('admin.layouts.admin_app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>License Purchased Status</th>
                                        <th>License Paid</th>
                                        <th>Reference Key</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @php
                                        $count = 1;
                                    @endphp
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{$count++}}
                                            </td>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                {{$user->O_Auth}}
                                            </td>
                                            <td>
                                                <span class="{{$user->license == true  ? 'badge badge-success' : 'badge badge-danger'}}">{{$user->license == true ? 'Activated' : 'Not Activated'}}</span>
                                            </td>
                                            <td>
                                                <button class="{{$user->license_paid == true ? 'btn btn-success' : 'btn btn-danger'}}" data-toggle="modal" style="cursor: pointer; color: #FFF; font-size: 0.8rem" data-target="#exampleModalCenter{{$user->id}}">
                                                    {{$user->license_paid == false ? 'UNPAID' : 'PAID'}}
                                                </button>
                                            </td>
                                            <td>
                                                {{$user->reference_key}}
                                            </td>
                                            <td>
                                                <a href="{{route('users.edit',$user->id)}}"
                                                   class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$user->id}}"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <form action="{{route('users.destroy',$user->id)}}" method="POST">
                                                @csrf
                                                <input value="DELETE" name="_method" type="hidden"/>
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Are you Sure ?.</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>This User Will be deleted</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal fade" id="exampleModalCenter{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <form action="{{route('change-license')}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{$user->id}}" name="user_id" />
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Please Change the Status, If the license is paid.</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <select name="license_paid" class="form-control">
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
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @push('js')
            <script>
                $(document).ready(function () {
                    // Javascript method's body can be found in assets/js/demos.js
                    md.initDashboardPageCharts();
                });
            </script>
    @endpush
