<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EJKNL4VSD0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-EJKNL4VSD0');
    </script>
    {{--    --}}
    <script>
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||
            []).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)
                [0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym")
        ym(88086039, "init", {
            id:88086039,
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            ut:"noindex"
        });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <title>@yield('title-content')</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <meta name="keywords" content="@yield('meta-keywords')" />
</head>
<body>
@include('inc.header')
<main id="fullPage" class="about_game_main">
    @yield('content')
    @include('inc.footer')
    @include('inc.casino69buy')
    @include('inc.casino69deepbuy')
    @include('inc.maxrelax_buy')
    @include('inc.mystic_buy')
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
