@extends('admin.layouts.admin_app', ['activePage' => 'contacts', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Contacts </h4>
                </div>
                <br>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead >
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $item)
                                  <tr>
                                      <td>{{$item->first_name}}</td>
                                      <td>{{$item->last_name}}</td>
                                      <td>{{$item->phone}}</td>
                                      <td>{{$item->email}}</td>
                                      <td>{{$item->text}}</td>
                                      <td>                         
                                          <form action="{{route('contacts.destroy',$item->id)}}" method="POST">
                                              @method('DELETE')
                                              @csrf
                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                          </form>
                                      </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
