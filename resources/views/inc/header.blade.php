@section('header')
<!-- HEADER -->
<header>
    <nav class="navbar navbar-expand-lg  fixed-top" aria-label="Ninth navbar example">
        <div class="container-xl">
            <a class="navbar-brand" href="{{ route('home') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL"
                    aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExample07XL">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">{{__('header.main_page')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false"> {{__('header.technology')}}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                            <li><a class="dropdown-item" href="{{ route('maxrelax') }}">MaxrelaX</a></li>
                            <li><a class="dropdown-item" href="{{ route('mystic') }}">Mystic</a></li>
{{--                            <li><a class="dropdown-item" href="{{ route('casino69') }}">Casino 69</a></li>--}}
{{--                            <li><a class="dropdown-item" href="{{ route('shespeech') }}">{{__('header.she_speech')}}</a></li>--}}

{{--                            <li><a class="dropdown-item" href="{{ route('casino69deep') }}">{{__('header.casino_deep')}}</a></li>--}}


{{--                            @if( request() -> segment(1) === 'en')--}}
{{--                                <li><a class="dropdown-item" href="{{ route('casino69') }}">Casino69 18+</a></li>--}}
{{--                            @endif--}}
                        </ul>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#footer_contacts">{{__('header.contacts')}}</a>--}}
{{--                    </li>--}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">{{__('header.about')}}</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('delivery') }}">{{__('header.delivery')}}</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
{{--                        <a class="nav-link"  href="{{ route('faq') }}">Вопросы</a>--}}
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">{{__('header.future')}}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                            <li><a class="dropdown-item" href="{{ route('future') }}">{{__('header.plan')}}</a></li>
                            <li><a class="dropdown-item disabled" href="{{ route('osirismap') }}">{{__('header.map')}}</a></li>
                            <li><a class="dropdown-item" href="{{ route('osiris') }}">Osiris</a></li>

                        </ul>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#aboutUs">О нас</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false"> {{__('header.change_lang')}}</a>
                      <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
{{--                        <li><a class="dropdown-item" href="/ru/{{request()->segment(count(request()->segments()))}}">RUS</a></li>--}}
{{--                          @if( (request() -> segment(1) === 'en') or (request() -> segment(1) === 'ru') )--}}
{{--                              <li><a class="dropdown-item" href="/ru/{{request()->segment(count(request()->segments()))}}">RUS</a></li>--}}
{{--                              <li><a class="dropdown-item" href="/en/{{request()->segment(count(request()->segments()))}}">ENG</a></li>--}}
{{--                          @else--}}
                          @if( request() -> segment(2) != '')
                              <li><a class="dropdown-item" href="/ru/{{request() -> segment(2)}}">RUS</a></li>
                              <li><a class="dropdown-item" href="/en/{{request() -> segment(2)}}">ENG</a></li>
                          @else
                              <li><a class="dropdown-item" href="/ru">RUS</a></li>
                              <li><a class="dropdown-item" href="/en">ENG</a></li>
                          @endif
{{--                              <li><a class="dropdown-item" href="/ru">RUS</a></li>--}}
{{--                              <li><a class="dropdown-item" href="/en">ENG</a></li>--}}
{{--                              <li><a class="dropdown-item" href="/en/{{request() -> segment(0)}}">test</a></li>--}}
{{--                              <li><a class="dropdown-item " href="/{{ app()->getLocale() }}/{{request()->segment(count(request()->segments()))}}">test</a></li>--}}
{{--                          @endif--}}

                      </ul>
                    </li>
                </ul>
                <!-- <form>
                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form> -->
            </div>
        </div>
    </nav>
</header>
<!-- HEADER END -->
