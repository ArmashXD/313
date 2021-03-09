@extends('layouts.app', ['activePage' => 'c_wheelhouse', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
    

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Level 25 - 32540</h4>
                <p class="card-category">Level 250 - 32540</p>
              </div>
              <br>
              <div class="card-header card-header-seconday">
                <h4 class="card-title text-center" style="color: black">Level 25 - 32540(Syed Jaffri)</h4>
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
                  <div class="col-sm-6">
                    <p class="text-center">Nihas mustafa</p>
                    <p class="text-center">NihasMustafa@gmail.com</p>
                    <p class="text-center">Lorem, ipsum@gmail.com</p>
                  </div>
               
                  <div class="col-sm-6">
                    <p class="text-center">Nihas mustafa</p>
                    <p class="text-center">NihasMustafa@gmail.com</p>
                    <p class="text-center">Lorem, ipsum@gmail.com</p>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection