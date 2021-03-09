@extends('layouts.app', ['activePage' => 'money', 'titlePage' => __('My Money')])

@section('content')
@if(!Auth::user()->license_paid == false && !Auth::user()->child->c_id_1 == null)

<div class="content">
  @if(Session::has('success'))
  <div class="alert alert-success">
      {{ Session::get('success') }}
  </div>
@endif
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">My Money</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered yajra-datatable2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Payment Method</th>
                        <th>Payment Account</th>
                        <th>Notes</th>
                        <th>Actions</th>
                      </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h2 class="text-center">Enter Preferred Payments Methods</h2>
            </div>
            <div class="card-body">
                <form action="{{route('money.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label><strong>Payment Method: </strong></label>
                            <input type="text" name="payment_method" placeholder=" *" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label><strong>Payment Account: </strong></label>
                            <input type="text" name="payment_account" placeholder=" *" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label><strong>Notes: </strong></label>
                            <textarea name="notes" id="" cols="30" rows="10" class="form-control">ads</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="button btn btn-primary text-center">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@else
@include('partials.alert')
@endif
@endsection
