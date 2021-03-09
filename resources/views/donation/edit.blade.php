@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])


@section('content')
@if(!Auth::user()->license_paid == false && !Auth::user()->child->c_id_1 == null)

<div class="content">
    <div class="container">

        <div class="card">
            <div class="card-header card-header-primary">
                <h2 class="text-center">Add New Donation</h2>
            </div>
        </div>
        <div class="container">
            <br>
            <form action="{{route('donation.update')}}" class="form-control" method="POST">
                @csrf
                <input type="text" hidden value="{{$donate->id}}" name="id">
                <div class="row">
                    <div class="col-md-6">
                        <label for=""><b> Shipper Name: </b></label>
                        <input type="text" class="form-control" name="shipper_name" value="{{$donate->shipper_name}}" placeholder="Enter Shipper Name">
                    </div>
                    <div class="col-md-6">
                        <label for=""><b> Consignee Name: </b></label>
                        <input type="text" class="form-control" name="consignee_name"
                            placeholder="Enter Consignee Name" value="{{$donate->consignee_name}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for=""><b> Country: </b></label>
                        <input type="text" class="form-control" name="destination_country" placeholder="Enter Country" value="{{$donate->destination_country}}">
                    </div>
                    <div class="col-md-4">
                        <label for=""><b> City: </b></label>
                        <input type="text" class="form-control" name="destination_city" placeholder="Enter City" value="{{$donate->destination_city}}">
                    </div>
                    <div class="col-md-4">
                        <label for=""><b> Status: </b></label>
                                               <input type="text" class="form-control" name="status" placeholder="Enter status">

                    </div>

                </div>
                <br><br>
                <button class="button btn btn-primary text-center">
                    Submit
                </button>
                <a href="{{route('donation.index')}}" class="button btn btn-primary text-center">
                    Go Back
                </a>
            </form>
        </div>
    </div>
</div>
@else
@include('partials.alert')
@endif
@endsection