<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
{{--    <link href="../dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css">--}}

{{--    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>--}}
{{--    <script type="text/javascript" src="../dist/jquery.vmap.js"></script>--}}


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
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/all.css">
    <meta name="keywords" content="@yield('meta-keywords')" />

</head>
<body>
@include('inc.header')
<main id="fullPagedelete">
    @yield('content')
{{--    @include('inc.carousel')--}}
    @include('inc.footer')
    @include('inc.casino69buy')
    @include('inc.casino69deepbuy')
    @include('inc.maxrelax_buy')
    @include('inc.mystic_buy')
</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery.vmap.js"></script>
<script src="/js/searchmap.js"></script>

<script type="text/javascript" src="/maps/jquery.vmap.russia.js" charset="utf-8"></script>

<script type="text/javascript" src="/js/test.js">

</script>

</body>
</html>
