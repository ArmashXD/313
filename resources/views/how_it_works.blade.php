@extends('layout.app')
@section('content')
    <section class="promo-primary">
        <picture>
            <source srcset="img/313/1.png" media="(min-width: 992px)"/>
            <img class="img--bg" src="img/how_it_works.png" alt="img"/>
        </picture>

        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">313</span>
                            <h1 class="promo-primary__title"><span>About</span><br/><span style="color:black;">Organization</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us start-->
    <section class="section about-us">
        <div class="container">
            <h1 class="text-center">3 EASY STEPS:</h1>
            <ol>
                <h5>REGISTER:</h5>
                <li>Register to World Jafaria Community Welfare and make a small donation.
                </li>
                <h5>BUILD COMMUNITY:</h5>
                <li>
                    Help the community grow by finding more donors and become an active part of our community.
                </li>
                <h5>
                    PROCURE/RECEIVE:
                </h5>
                <li>As your inductees bring more donors, the community grows and you receive a small chunk of donation as well.
                </li>
            </ol>
        </div>
        <div class="container">
            <h1 class="text-center">GUARANTEED GROWTH:</h1>
            <ol>
               <li>In WJCW, your personal growth is guaranteed regardless of the fact that whether you successfully help in growing our community or not. Since new members join, they will be randomly assigned under you, thus making sure that your initial donation bears fruit for you. Our community model ensures that it is a win-win situation for each and every member of WJCW.
               </li>
            </ol>
        </div>
        <div class="container">
            <h1 class="text-center">DIFFERENT RETURNS:
            </h1>
            <ol>
                <h5>DIRECT MEMBERS:</h5>
                <li>You receive direct donations by new members which came through you into the community.

                </li>
                <h5>INDIRECT MEMBERS:</h5>
                <li>
                    You receive donations by new members who join WJCW but are not affiliated with you in any way, but they are randomly assigned under you.
                </li>
                <h5>
                    PERSONALS:
                </h5>
                <li>As new members keep joining under your direct members, you keep receiving donations from new joining members.
                </li>
                <h5>
                    CHAIN:
                </h5>
                <li>As the community grows under you, you receive more and more donations as per your initial donation plan, opening up the doors of unlimited opportunities.

                </li>
                <h5>
                    DONATING MEMBERS:
                </h5>
                <li>As the fundamental ideology of World Jafaria Community Welfare is to care and share, thus enabling its members to directly donate to other members as they seem fit.

                </li>
            </ol>
        </div>
        <div class="container">
            <h1 class="text-center">INVESTMENT PLANS</h1>
            <p>We got the right plan designed carefully to cater your specific needs. We have 12 different exciting investment plans to choose from. Everyone has equal opportunity to grow and contribute in the community. Choose your plan or plans and let us help each other.
            </p>
        </div>
    </section>
    <section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1 text-center">LEVELS</h5>
        <div class="row">
            <!-- Team member -->
        @foreach($level as $item)
            <div class="col-xs-12 col-sm-6 col-md-4" style="padding:10px; box-shadow: 10px;  border: 3px #EFC940 ">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card" >
                                <div class="card-body text-center">
                                    <p></p>
                                    <h4 class="card-title">Level: {{$item->id}}</h4>
                                    <p class="card-text">Fee: {{$item->name}}</p>
                                    <p class="card-text">Profit: {{$item->name}}</p>
                                    <p class="card-text">Commission: {{$item->admin_commission}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
    <!-- about-us end-->
    <!-- video block start-->
    <section class="section video-block no-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-frame"><img class="img--bg" src="img/313videobanner.png" alt="frame"/><a
                            class="video-trigger video-frame__trigger"
                            href="https://youtu.be/hiiiz6-0nko"><span class="video-frame__icon"><i
                                    class="fa fa-play" aria-hidden="true"></i></span><span class="video-frame__text">Watch our video</span></a><img
                            class="video-frame__img-layout" src="img/video_frame-layout.png" alt="layout"/></div>
                </div>
            </div>
        </div>
    </section>
    <!-- video block end-->
    <!-- statistics start-->
    <section class="section statistics no-padding-top">
        <div class="container">
            <div class="row margin-bottom">
                <div class="col-12">
                    <div class="heading heading--primary heading--center"><span
                            class="heading__pre-title">What we Do</span>
                        <h2 class="heading__title no-margin-bottom"><span>Our</span> <span>Statistics</span></h2>
                    </div>
                </div>
            </div>
            <div class="row offset-margin">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="img/icon_2.png" alt="img"/><span
                                class="js-counter">32</span></div>
                        <div class="icon-item__text">
                            <p>Country</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="img/icon_3.png" alt="img"/><span
                                class="js-counter">200 </span><span>+</span></div>
                        <div class="icon-item__text">
                            <p>Thousand People Helped</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="img/icon_4.png" alt="img"/><span
                                class="js-counter">65 </span><span>b</span></div>
                        <div class="icon-item__text">
                            <p>Dollars We Collected </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statistics end-->
    <!-- team start-->
    <section class="section team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading heading--primary"><span class="heading__pre-title">Team</span>
                        <h2 class="heading__title no-margin-bottom text-center"><span>Our Team</span></h2>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_1.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_1.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Chris Patt</div>
                            <div class="team-item__position">Ceo/Founder</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_2.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_2.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Mike Carter</div>
                            <div class="team-item__position">Manager</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_3.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_3.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Bella Crusio</div>
                            <div class="team-item__position">Leader</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_4.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_4.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Cesario Lee</div>
                            <div class="team-item__position">Founder</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_5.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_5.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Ched Kurtsovski</div>
                            <div class="team-item__position">Volunteer</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_6.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_6.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Lisa Chester</div>
                            <div class="team-item__position">Volunteer</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_7.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_7.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Aisha Ten</div>
                            <div class="team-item__position">CEO</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- iteam start-->
                    <div class="team-item team-item--rounded">
                        <ul class="team-item__socials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="team-item__img-holder"><img class="img--layout" src="img/team_8.png" alt="layout"/>
                            <div class="team-item__img"><img class="img--bg" src="img/team_8.jpg" alt="teammate"/></div>
                        </div>
                        <div class="team-item__description">
                            <div class="team-item__name">Jack Blumberg</div>
                            <div class="team-item__position">Volunteer</div>
                        </div>
                    </div>
                    <!-- iteam end-->
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>
    <!-- team end-->
@endsection
