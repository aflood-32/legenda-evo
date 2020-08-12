<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>{{ $meta['title'] }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $meta['desc'] }}">
    <meta name="keywords" content="{{ $meta['keyw'] }}">
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
          rel="stylesheet">
    <link rel="icon" href="{{$favicon}}" type="image/x-icon">
    {!! $minifier->activate([
    'theme/css/bootstrap.min.css',
    'theme/css/jquery-ui.min.css',
    'theme/css/owl.carousel.min.css',
    'theme/css/font-awesome.min.css',
    'theme/css/magnific-popup.min.css',
    'theme/css/style.css',
], 1) !!}
</head>

<body>
<header class="le-header">
    <div class="container header-container">
        @if(isset($common['site_logo']))
            <a href="/" class="header-logo">
                <img src="{{$common['site_logo']}}" alt="">
            </a>
        @endif
        <div class="header-r">
            <div class="header-top">
                <ul class="menu-nav">
                    @foreach($menu as $item)
                        <li @if($documentObject['id'] == $item['id']) class="active" @endif>
                            <a href="@makeUrl($item['id'])">{{$item['pagetitle']}}</a>
                            @if($item['children'])
                                <ul class="sub-menu">
                                    @foreach($item['children'] as $children)
                                        <li><a href="@makeUrl($children['id'])">{{$children['pagetitle']}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="header-bottom">
                <ul class="header-phone">
                    <li><a href="tel:{{$common['phone']}}">{{$common['phone']}}</a></li>
                    <li><a href="tel:{{$common['phone1']}}">{{$common['phone1']}}</a></li>
                    <li><a href="tel:{{$common['phone2']}}">{{$common['phone2']}}</a></li>
                </ul>
                <a href="" class="wi-btn2"><span>Обратный звонок</span></a>
            </div>

            <div class="menu-btns">
                <div class="vr-rmenu3-toggle"><i class="fa fa-phone"></i></div>
                <a href="" class="mob-btn vr-rmenu-toggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="le-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                @foreach($menu as $item)
                    <div class="col">
                        <div class="footer-item">
                            <h4><a href="@makeUrl($item['id'])">{{$item['pagetitle']}}</a></h4>
                            @if($item['children'])
                                <ul class="footer-link">
                                    @foreach($item['children'] as $children)
                                        <li><a href="@makeUrl($children['id'])">{{$children['pagetitle']}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                @endforeach
                <div class="col">
                    <div class="footer-item">
                        <h4>Контакты</h4>
                        <ul class="footer-phone">
                            <li><a href="tel:{{$common['phone']}}">{{$common['phone']}}</a></li>
                            <li><a href="tel:{{$common['phone1']}}">{{$common['phone1']}}</a></li>
                            <li><a href="tel:{{$common['phone2']}}">{{$common['phone2']}}</a></li>
                        </ul>
                        <p>{{$common['address']}}</p>

                        <p><a href="mailto:{{$common['email']}}">{{$common['email']}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copi">{{$common['footer_text']}}</div>
        </div>
    </div>
</footer>

<div class="vr-rmenu3-wr vr-hide">
    <div class="vr-rmenu3">
        <div class="vr-rmenu3-header">
            <span class="vr-rmenu3-close"><img src="theme/img/up-menu.png" alt=""></span>
        </div>
        <div class="vr-rmenu3-content">
            <div class="vr-rmenu3-phone">
                <p>позвонить</p>
                <ul class="phone-mob">
                    <li><a href="tel:{{$common['phone']}}">{{$common['phone']}}</a></li>
                    <li><a href="tel:{{$common['phone1']}}">{{$common['phone1']}}</a></li>
                    <li><a href="tel:{{$common['phone2']}}">{{$common['phone2']}}</a></li>
                </ul>

            </div>


        </div>
    </div>
</div>

<div class="vr-rmenu-wr vr-hide">
    <div class="vr-rmenu">
        <div class="vr-rmenu-header">
            <span class="vr-rmenu-close"><img src="theme/img/up-menu.png" alt=""></span>
        </div>
        <div class="vr-rmenu-list">
            <ul class="rmenu-sub">
                @foreach($menu as $item)
                    <li class="parent">
                        <a href="@makeUrl($item['id'])">{{$item['pagetitle']}}</a>
                        @if($item['children'])
                            <span class="toggle-btn"><img src="theme/img/rig-icon.svg" alt=""></span>
                            @foreach($item['children'] as $children)
                                <ul class="sub-mob-menu">
                                    <li><a href="@makeUrl($children['id'])">{{$children['pagetitle']}}</a></li>
                                </ul>
                            @endforeach
                        @endif
                    </li>
                @endforeach
                <li><a href="">Контакты</a></li>
            </ul>
        </div>
        <div class="mobi-head">
            <ul class="header-phone">
                <li><a href="tel:{{$phone}}">{{$phone}}</a></li>
                <li><a href="tel:{{$phone1}}">{{$phone1}}</a></li>
                <li><a href="tel:{{$phone2}}">{{$phone2}}</a></li>
            </ul>
            <a href="" class="wi-btn2"><span>Обратный звонок</span></a>
        </div>

    </div>
</div>

<div data-modal="callback" class="modal">
    <div class="modal__body">
        <span data-id="close_trigger">&#10060;</span>
        {!! $modx->runSnippet('FormLister', array(
    'debug' => 1,
            'formid' => 'ContactForm',
            'to' => 'afloode@gmail.com',
            'subject' => 'Message from Legenda',
            'protectSubmit' => '0',
            'submitLimit' => '0',
            'rules' => [
                    'name' => [
                        'required' => 'Введите имя'
                    ],
                    'email' => [
                        'required' => 'Введите email'
                    ],
                    'message' => [
                         'required' => 'Введите сообщение'
                    ]
                ],
            'templatePath' => 'views/',
            'successTpl' => '@B_FILE:partials/forms/successTpl',
            'formTpl' => '@B_FILE:partials/forms/ContactForm',
            'reportTpl' => '@B_FILE:partials/forms/ContactFormReport',
        )); !!}
    </div>
</div>

{!! $minifier->activate([
    'theme/js/jquery-3.1.1.min.js',
    'theme/js/jquery-ui.min.js',
    'theme/js/owl.carousel.min.js',
    'theme/js/jquery.magnific-popup.min.js',
    'theme/js/script.js',
    'theme/js/custom.js'
], 1) !!}

</body>
</html>
