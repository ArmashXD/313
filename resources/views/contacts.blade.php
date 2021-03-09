@extends('layout.app')
@section('content')
    <section class="promo-primary">
        <picture>
            <source srcset="img/313/3.png" media="(min-width: 992px)"/>
            <img class="img--bg" src="img/contact-313.png" alt="img"/>
        </picture>

        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">313</span>
                            <h1 class="promo-primary__title"><span style="color: white">Contacts</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <section class="section contacts">
        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="row offset-margin">

                <div class="col-sm-6 col-lg-3">
                </div>
                <div class="col-sm-6 col-lg-3">
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">

                        <div class="icon-item__text">
                            <!-- socials start-->
                            <ul class="socials">
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram"
                                                                                               aria-hidden="true"></i></a>
                                </li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus"
                                                                                               aria-hidden="true"></i></a>
                                </li>
                                <li class="socials__item"><a class="socials__link socials__link--active" href="#"><i
                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook"
                                                                                               aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <!-- socials end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- contacts start-->
    <section class="section contacts no-padding-top">
        <div class="contacts-wrapper">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-12">
                        <form action="{{route('contact.store')}}" method="POST" class="form message-form"
                              action="javascript:void(0);">
                            @csrf
                            <h6 class="form__title">Send Message</h6><span class="form__text">* The following info is required</span>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="first_name" placeholder="First Name *"
                                           required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="last_name" placeholder="Last Name *"
                                           required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="email" name="email" placeholder="Email *"
                                           required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="tel" name="phone" placeholder="Phone"/>
                                </div>
                                <div class="col-12">
                                    <textarea class="form__message form__field" name="text"
                                              placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts end-->
    <!-- bottom bg start-->
    <section class="bottom-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-background__img"><img src="img/bottom-bg.png" alt="img"/></div>
                </div>
            </div>
        </div>
    </section>
    <!-- bottom bg end-->
@endsection
