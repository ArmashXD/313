@extends('layout.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>

    <section class="section">
        <div class="container">
            <div class="card">
                <div class="card-header" style="background-color: #EFC940">
                    <div class="card-title text-center">
                        <h2>Register</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" id="register-form" action="{{route('register')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                            @if ($errors->has('name'))
                                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @if ($errors->has('email'))
                                <div id="email-error" class="error text-danger pl-3" for="email"
                                     style="display: block;">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @if ($errors->has('password'))
                                <div id="password-error" class="error text-danger pl-3" for="password"
                                     style="display: block;">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password:</label>
                            <input type="password" class="form-control" id="password" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <div id="password_confirmation-error" class="error text-danger pl-3"
                                     for="password_confirmation" style="display: block;">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Referred By</label>
                            <input type="text" name="refer_key"
                                   placeholder="reference, If you don't have any tree will start from you."
                                   class="form-control"/>
                        </div>
                        <input type="hidden" value="1" name="level"/>
                        <div class="form-group">

                        <div class="content">
                            <script src="https://js.stripe.com/v3/"></script>
                            <div class="card">
                                <div class="card-header-primary m-2">
                                    Payment
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="card-element">
                                            License Fee
                                        </label>
                                        <input type="text" class="form-control" name="asd"
                                                  placeholder="Enter Amount" disabled value="£ 20" />
                                            
                                        <input type="hidden" class="form-control" name="amount"
                                               placeholder="Enter Amount" value="20"/>
                                               <label for="card-element mt-1">
                                                Enter Card
                                            </label>
                                            <div id="card-element">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                     
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="button footer__button button--filled">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer" style="background-color: #EFC940">
                    <br>
                </div>
            </div>
        </div>
    </section>
    <script>
        var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
    </script>
    <script src="{{asset('/js/register.js')}}">

    </script>
@endsection

