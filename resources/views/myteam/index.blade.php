@extends('layouts.app', ['activePage' => 'myteam', 'titlePage' => __('User Profile')])

@section('content')
@if(!Auth::user()->license_paid == false && !Auth::user()->child->c_id_1 == null)

<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center">My Team</h4>
                        </div>
                        <br>
                        <div class="card-header card-header-seconday">
                            <h4 class="card-title text-center" style="color: black">Level: {{Auth::user()->level->name}} - Reference Key: {{Auth::user()->reference_key}} : ({{Auth::user()->name}})</h4>
                        </div>
                        <div class="card-body ">

                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                                        @csrf
                                        @method('put')

                                        <div class="card ">
                                            <div class="card-body ">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p class="text-center">{{Auth::user()->email}} ({{Auth::user()->name}})</p>
                                                        <p class="text-center">{{$child->getchild->email  ?? 'no user registered yet'}} ({{$child->getchild->name ?? 'no user registered yet'}})</p>
                                                        <p class="text-center">{{$child2->getchild->email ?? 'no user registered yet'}} ({{$child2->getchild->name ?? 'not registered yet'}})</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                        @else
        @include('partials.alert')
        @endif
@endsection
