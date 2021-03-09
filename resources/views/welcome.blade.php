@extends('layout.app')
@section('content')



    <!-- promo start-->
    <section class="promo">
        <div class="promo-slider">
            <div class="promo-slider__item promo-slider__item--style-1">
                <picture>
                    <source src="{{asset('img/111.png')}}" media="(min-width: 835px)"/>
                    <source src="img/11.png" media="(min-width: 376px)"/>
                    <img class="img--bg" src="{{asset('img/111.png')}}" style="height:100%" alt="img"/>
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">

                                    </div>
                                    <div class="promo-slider__wrapper-2">

                                    </div>
                                    {{-- <div class="promo-slider__wrapper-3"><a
                                            class="button promo-slider__button button--primary" href="#">Discover</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-slider__item promo-slider__item--style-2">
                <picture>
                    <source src="img/12.png" media="(min-width: 835px)"/>
                    <source src="img/12.png" media="(min-width: 376px)"/>
                    <img class="img--bg" src="img/12.png" alt="img"/>
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="promo-slider__title"><span>Our Helping</span><br/><span>around the world.</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish
                                            smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier
                                            fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3"><a
                                            class="button promo-slider__button button--primary" href="https://the313cf.com/register">Join Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- slider nav start-->
        <div class="slider__nav slider__nav--promo">
            <div class="promo-slider__count"></div>
            <div class="slider__arrows">
                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <!-- slider nav end-->
    </section>
    <!-- promo end-->
    <!-- about us start-->
    <section class="section about-us" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
                        <h2 class="heading__title"><span>Help is Our</span> <span>Main Goal</span></h2>
                    </div>
                    <p><strong>Allows you to receive half of everything that happens in your organization forever.</strong></p>
                    <p>Is based on the world famous Mobius Loop and the system G Technology, which is the most successful Peer-To-Peer Team Crowdfunding Program in history.</p>
                    <p>Provide both help from above and below and you can receive donations just seconds after registering.</p>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="info-box"><img class="img--layout" src="img/about_layout.png" alt="img"/><img
                            class="img--bg" src="img/313.png" style="border-radius: 50%;" alt="img"/>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end-->
    <!-- projects start-->
    <section class="section projects no-padding-top no-padding-bottom">
        <div class="container">
            <div class="row align-items-end margin-bottom">
                <div class="col-lg-9">
                    <div class="heading heading--primary"><span class="heading__pre-title">What we Did</span>
                        <h2 class="heading__title"><span>313</span> <span>Projects</span></h2>
                        <p class="no-margin-bottom">Sharksucker sea toad candiru rocket danio tilefish stingray
                            deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc
                            sucker, yellowtail kingfish </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters projects-masonry">
            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_1.png" alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_6.png" alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>

            </div>
            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_3.png" alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>

            </div>
               <div
                class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src=img/projects_2.png alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>

            </div>


            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_4.png" alt="img"/>
                    <!--<div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>-->
                </div>

            </div>

            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_5.png" alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>

            </div>


            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_7.png" alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>

            </div>

            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_8.png" alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>

            </div>

            <div
                class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
                <div class="projects-masonry__img"><img class="img--bg" src="img/projects_9.png" alt="img"/>
                    <div class="projects-masonry__inner"><span class="projects-masonry__badge"
                                                               style="background: #F8AC3A;">Food</span>
                        <h3 class="projects-masonry__title"><a href="cause-details.html">Help for Children of the
                                East</a></h3>
                        <p>Murray cod clownfish American sole rockfish dojo loach gulper, trout-perch footballfish,
                            pelican eel. Spinefoot coelacanth eagle ray </p>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- projects end-->
    <!-- subscribe start-->
    <section class="subscribe">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-4">
                    <h2 class="subscribe__title">Subscribe.</h2>
                </div>
                <div class="col-lg-8">
                    <form class="subscribe-form" action="javascript:void(0);">
                        <input class="subscribe-form__input" type="email" name="email" placeholder="Enter your E-mail"
                               required="required"/>
                        <input class="subscribe-form__submit" type="submit" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end-->
@endsection
