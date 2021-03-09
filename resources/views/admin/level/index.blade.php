@extends('admin.layouts.admin_app', ['activePage' => 'level', 'titlePage' => __('Dashboard')])

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
                    <h4 class="card-title">Levels </h4>
                </div>
                <br>
                <div class="card-header card-header-seconday">
                    <h4 class="card-title text-center" style="color: black">Levels</h4>
                    <a class="btn btn-primary" href="{{route('levels.create')}}">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>Level Name</th>
                                <th>Level Price</th>
                                <th>Your Commission</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($levels as $item)
                                  <tr>
                                      <td>Level {{$item->id}}</td>
                                      <td>{{$item->name}}</td>
                                      <td>{{$item->admin_commission}}</td>
                                      <td>
                                          <a class="btn btn-info" href="{{route('levels.edit',$item->id)}}">
                                            <i class="fa fa-pencil"></i>
                                        </a>                                          <form action="{{route('levels.destroy',$item->id)}}" method="POST">
                                              @method('DELETE')
                                              @csrf
                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                          </form>
                                      </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$levels->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
