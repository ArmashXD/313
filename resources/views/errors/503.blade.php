@extends('layout.app')

<style>
    .error-404 {
  margin: 0 auto;
  text-align: center;
}
.error-404 .error-code {
  bottom: 60%;
  color: yellow;
  font-size: 96px;
  line-height: 100px;
  font-weight: bold;
}
.error-404 .error-desc {
  font-size: 12px;
  color: #647788;
}
.error-404 .m-b-10 {
  margin-bottom: 10px!important;
}
.error-404 .m-b-20 {
  margin-bottom: 20px!important;
}
.error-404 .m-t-20 {
  margin-top: 20px!important;
}

    </style>

@section('content')
<section class="section">

<div class="container" >

<div class="error-404">
    <div class="error-code m-b-10 m-t-20">503 <i class="fa fa-warning"></i></div>
    <h2 class="font-bold">Oops 503! Service Unavailable Please come back again.</h2>

    <div class="error-desc">
        Sorry, but the page you are looking for was either not found or does not exist. <br/>
        Try refreshing the page or click the button below to go back to the Homepage.
        <div><br/>
            <!-- <a class=" login-detail-panel-button btn" href="http://vultus.de/"> -->
            <a href="{{route('index')}}" class="button footer__button button--filled" style="width:200px"><span class="glyphicon glyphicon-home"></span> Go back to Homepage</a>
        </div>
    </div>
</div>
</div>

</section>
@endsection()
