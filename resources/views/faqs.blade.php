@extends('layout.app')
@section('content')
<section class="promo-primary">
    <picture>
        <source srcset="img/313/2.png" media="(min-width: 992px)"/>
        <img class="img--bg" src="img/FAQ-313.png" alt="img"/>
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item"><span class="promo-primary__pre-title">313</span>
                        <h1 class="promo-primary__title"><span>FAQ</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq start-->
<section class="section faq">
    <div class="container">
        <div class="row margin-bottom">
            <div class="col-12">
                <div class="heading heading--primary"><span class="heading__pre-title">Faq</span>
                    <h2 class="heading__title no-margin-bottom"><span>General</span> <span>Questions</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="accordion accordion--primary">
                    <div class="accordion__title-block">
                        <h6 class="accordion__title"> Will this system work for me?</h6><span
                            class="accordion__close"></span>
                    </div>
                    <div class="accordion__text-block">
                        <p><strong>Question 1:</strong> If you were to receive donation of any amount today or tomorrow, could that help you with a short term or long term personal need, personal project or business initiative?
                           <strong>Question 2:</strong>  Can you think of 2 people who could also benefit the same way if they should receive a similar donation?
                            If your answer to any of the questions above was "YES", this system will surely work for you</p>
                    </div>
                </div>
                <div class="accordion accordion--primary">
                    <div class="accordion__title-block">
                        <h6 class="accordion__title">How can I get involved?</h6><span
                            class="accordion__close"></span>
                    </div>
                    <div class="accordion__text-block">
                        <p>Using 3 Simple Steps
                            <ul>
                            <li> STEP 1: Register and Become an Active Donor
                            </li>
                            <li>
                                STEP 2: Help 2 People Become Active Donors
                            </li>
                            <li>
                                STEP 3: They Help 2 Become an Active Donors
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="faq-aside"><img class="img--bg" src="img/313.png" alt="img"/>
                    <h5 class="faq-aside__title">How can I get involved ?</h5>
                    <p>Using 3 Simple Steps</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq end-->
<!-- bottom bg start-->
<section class="bottom-background background--brown">
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
