@extends('layout.app')

@section('content')
<section class="section">
<div class="container-fluid">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <br><br>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card card-login card-hidden mb-3">
          <div class="card-header text-center" style="background-color: #EFC940">
              <div class="card-title"><h3>LOGIN</h3></div>
            {{-- <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div> --}}
          </div>
          <div class="card-body">
              <label>Email</label>

              <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <label>Password</label>
              <div class="input-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}"  required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
              <button type="submit" class="button footer__button button--filled">{{ __('Login') }}</button>
              <div class="row">
                  <div class="col-6">
                      @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" class="text-dark">
                              <small>{{ __('Forgot password?') }}</small>
                          </a>
                      @endif
                  </div>
                  <div class="col-6 text-right">
                      <a href="{{ route('register') }}" class="text-dark">
                          <small>{{ __('Create new account') }}</small>
                      </a>
                  </div>
              </div>
          </div>
          <div class="card-footer justify-content-center" style="background-color:#EFC940 ">
                <br>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
</section>

@endsection
