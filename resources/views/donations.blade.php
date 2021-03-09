@extends('layout.app')
@section('content')
<section class="promo-primary">
    <picture>
        <source srcset="img/causes.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/causes.jpg" alt="img"/>
    </picture>
    <div class="promo-primary__description"> <span>Charity</span></div>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                        <h1 class="promo-primary__title"><span>Pricing</span> <span>Plans</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing style-1 start-->
<section class="section pricing pricing-style--1">
    <div class="container">
        <div class="row offset-margin">
            <div class="col-lg-4">
                <div class="heading heading--primary"><span class="heading__pre-title">Pricing Tables</span>
                    <h2 class="heading__title"><span>Pricing</span> <span>Plan</span></h2>
                    <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata.</p>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
                <div class="pricing-item pricing-item--primary">
                    <h6 class="pricing-item__plan">Standart</h6>
                    <div class="pricing-item__price">Free</div>
                    <ul class="pricing-item__list">
                        <li>Canthigaster rostrata. </li>
                        <li>Midshipman dartfish </li>
                        <li class="item--disabled">Modoc sucker yellowtail </li>
                        <li class="item--disabled">Kingfish basslet.</li>
                    </ul><a class="pricing-item__button button button--primary" href="#">Get Started</a>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
                <div class="pricing-item pricing-item--primary">
                    <h6 class="pricing-item__plan">Premium</h6>
                    <div class="pricing-item__price">0.99<span>/mo</span></div>
                    <ul class="pricing-item__list">
                        <li>Canthigaster rostrata. </li>
                        <li>Midshipman dartfish </li>
                        <li>Modoc sucker yellowtail </li>
                        <li>Kingfish basslet.</li>
                    </ul><a class="pricing-item__button button button--primary" href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing style-1 end-->
<!-- pricing style-2 start-->
<section class="section pricing pricing-style--2">
    <div class="container">
        <div class="row margin-bottom">
            <div class="heading heading--primary heading--center"><span class="heading__pre-title">Pricing Tables</span>
                <h2 class="heading__title no-margin-bottom"><span>Pricing</span> <span>Plan</span>					</h2>
            </div>
        </div>
        <div class="row offset-margin">
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-3">
                <div class="pricing-item pricing-item--style-2">
                    <h6 class="pricing-item__plan">Basic</h6>
                    <div class="pricing-item__price">Free</div>
                    <ul class="pricing-item__list">
                        <li>Canthigaster rostrata. </li>
                        <li class="item--disabled">Midshipman dartfish </li>
                        <li class="item--disabled">Modoc sucker yellowtail </li>
                        <li class="item--disabled">Kingfish basslet.</li>
                    </ul><a class="pricing-item__button button button--primary" href="#">Get Started</a>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-3">
                <div class="pricing-item pricing-item--style-2">
                    <h6 class="pricing-item__plan">Standart</h6>
                    <div class="pricing-item__price">0.99<span>/mo</span></div>
                    <ul class="pricing-item__list">
                        <li>Canthigaster rostrata. </li>
                        <li>Midshipman dartfish </li>
                        <li class="item--disabled">Modoc sucker yellowtail </li>
                        <li class="item--disabled">Kingfish basslet.</li>
                    </ul><a class="pricing-item__button button button--primary" href="#">Get Started</a>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-3">
                <div class="pricing-item pricing-item--style-2 pricing-item--selected">
                    <h6 class="pricing-item__plan">Optimal</h6>
                    <div class="pricing-item__price">1.99<span>/mo</span></div>
                    <ul class="pricing-item__list">
                        <li>Canthigaster rostrata. </li>
                        <li>Midshipman dartfish </li>
                        <li>Modoc sucker yellowtail </li>
                        <li class="item--disabled">Kingfish basslet.</li>
                    </ul><a class="pricing-item__button button button--primary" href="#">Get Started</a>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-3">
                <div class="pricing-item pricing-item--style-2">
                    <h6 class="pricing-item__plan">Premium</h6>
                    <div class="pricing-item__price">3.99<span>/mo</span></div>
                    <ul class="pricing-item__list">
                        <li>Canthigaster rostrata. </li>
                        <li>Midshipman dartfish </li>
                        <li>Modoc sucker yellowtail </li>
                        <li>Kingfish basslet.</li>
                    </ul><a class="pricing-item__button button button--primary" href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing style-2 end-->
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
