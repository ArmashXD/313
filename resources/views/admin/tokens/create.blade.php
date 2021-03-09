@extends('admin.layouts.admin_app', ['activePage' => 'tokens', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header"><h3>Add A New Token</h3> </div>
            <div class="card-body">
                <form method="POST" action="{{route('tokens.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>
                            Token Name
                        </label>
                        <input name="name" placeholder="Enter Token name" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>
                            Price
                        </label>
                        <input name="price" placeholder="Enter price" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>
                            Status
                        </label>
                        <select name="active" class="form-control" required>
                            <option value="0">Not Active</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
