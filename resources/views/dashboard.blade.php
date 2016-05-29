<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Gleb Tiltikov @ Laravel EDU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="/css/theme.css" rel="stylesheet">
</head>

<body>

<div class="navbar navbar-fixed-top header">
    <div class="col-md-12">
        <div class="navbar-header">
            <a href="{{ route('home') }}" class="navbar-brand"><i class="glyphicon glyphicon-home"></i></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.bootply.com" target="_ext">Bootply+</a></li>
                <li><a href="#" id="btnToggle"><i class="glyphicon glyphicon-th"></i></a></li>
                @if (Auth::user())
                    <li><a href="{{ url('/auth/logout') }}" title="Выйти из системы"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} [X]</a></li>
                @else
                    <li><a href="#loginModal" data-toggle="modal" title="Войти"><i class="glyphicon glyphicon-user"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
</div>

<div class="navbar navbar-default" id="subnav">
    <div class="col-md-12">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse2">
            @if (Auth::user())
                <ul class="nav navbar-nav navbar-left">
                    <li @if ($my) class="active" @endif><a href="{{ url('/adverts/list/my') }}">Мои объявления</a></li>
                    <li><a href="#advertModal" role="button" data-toggle="modal">Новое объявление</a></li>
                </ul>
            @endif

            <ul class="nav navbar-nav navbar-right">
                <li @if (!$my) class="active" @endif><a href="{{ route('all_adverts') }}">Все объявления</a></li>
                @if (! Auth::user())
                    <li><a href="#registrationModal" role="button" data-toggle="modal">Регистрация</a></li>
                    <li><a href="#loginModal" role="button" data-toggle="modal">Войти</a></li>
                @endif
                <li><a href="#aboutModal" role="button" data-toggle="modal">О проекте</a></li>
            </ul>
        </div>
    </div>
</div>

<!--main-->
<div class="container" id="main">
    <div class="row">
        <div class="col-md-12"><h2>Laravel 5.2 "Доска объявлений"</h2></div>
        <div class="col-md-12">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable">
                    {!! $error !!}
                </div>
            @endforeach

            @if (! Auth::user())
                <div class="alert alert-info alert-dismissable">
                    <strong>Внимание!</strong> Вы должны <a href="#loginModal" role="button" data-toggle="modal">войти в систему</a>, чтобы иметь возможность подавать объявления.
                </div>
            @endif

            @if(Session::has('flash_message'))
                <div class="alert alert-success alert-dismissable">
                    {!! session('flash_message') !!}
                </div>
            @endif
        </div>
    </div>

    @foreach ($adverts as $i => $advert)
        <div class="row">
            @include('advert/bulletin')

            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Предложения</h4></div>

                    @foreach($advert->offers as $j => $offer)
                        @include('advert/offer')
                    @endforeach

                    @if (count($advert->offers) == 0)
                        <div class="panel-body">
                            <p>
                                <em>На данный момент предложений нет</em>
                            </p>
                        </div>
                    @endif

                    @if (Auth::user() && ! $advert->isOwn())
                        @include('advert/form/offer')
                    @endif
                </div>
            </div>
        </div>

        <hr>
    @endforeach

    <div class="row">
        <div class="col-md-12 text-center">
            <p>
                <a href="mailto:tiltikov.gleb@gmail.com" target="_ext">Gleb Tiltikov @ Laravel EDU</a><br>
                <a href="http://bootply.com/templates" target="_ext">More Bootstrap Templates by @Bootply</a>
            </p>
        </div>

        <hr>
    </div>
</div><!--/main-->

@if (! Auth::user())
    @include('modal/login')
    @include('modal/register')
@else
    @include('modal/advert')
@endif

@include('modal/about')

<script type='text/javascript' src="/js/jquery.min.js"></script>
<script type='text/javascript' src="/js/bootstrap.min.js"></script>
<script type='text/javascript' src="/js/dservice.js"></script>

</body>

</html>