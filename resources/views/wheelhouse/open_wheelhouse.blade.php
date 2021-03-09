@extends('layouts.app', ['activePage' => 'wheelhouse', 'titlePage' => __('User Profile')])

@section('content')
@if(!Auth::user()->license == 0 && !Auth::user()->child->c_id_1 == null)
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Level {{Auth::user()->level->name}}
                                - {{Auth::user()->reference_key}}</h4>
                        </div>
                        <br>
                        <div class="card-header card-header-seconday">
                            <h4 class="card-title text-center" style="color: black">Level: {{Auth::user()->level->name}}
                                - Reference Key: {{Auth::user()->reference_key}} : ({{Auth::user()->name}})</h4>
                        </div>
                        <div class="card-body ">

                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('profile.password') }}"
                                          class="form-horizontal">
                                        @csrf
                                        @method('put')

                                        <div class="card ">
                                            <div class="card-body ">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p class="text-center">{{Auth::user()->email}}</p>
                                                        <p class="text-center">{{$child->getChildOne->email ?? 'no user registered yet'}}</p>
                                                        <p class="text-center">{{$child->getChildTwo->email ?? 'no user registered yet'}}</p>
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
            </div>
        </div>
    </div>
@else
    @include('partials.alert')
@endif
@endsection
