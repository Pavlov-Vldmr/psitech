@extends('layouts.app')
@section('title-content')
    PsiTech. {{__('about.about_title')}}
@endsection
@section('content')
    <div id="delivery" class="delivery-container section pb-3" data-percentage="80">
        <div class="slide">
            <div class="delivery-discription container d-flex flex-column justify-content-center align-items-center">
                <h2 class="delivery-article text-center p-4">{{__('about.about_title')}}</h2>
                <hr class="bg-secondary" style="margin:auto; width: 270px; height: 2px;">
{{--                <h4>2{{__('about.about_article_one')}}</h4>--}}
{{--                <p class="col-lg-10 delivery-text text-center  p-4" style="font-size: 1.3em;">В разработке</p>--}}
                <p class="col-lg-10 delivery-text  p-4" style="font-size: 1.3em;">{{__('about.about_text_1')}}</p>
                <p class="col-lg-10 delivery-text  p-4" style="font-size: 1.3em;">{{__('about.about_text_2')}}</p>
                <p class="col-lg-10 delivery-text  p-4" style="font-size: 1.3em;">{{__('about.about_text_3')}}</p>
                <p class="col-lg-10 delivery-text  p-4" style="font-size: 1.3em;">{{__('about.about_text_4')}}</p>
                <hr class="bg-secondary mb-4" style="margin:auto; width: 270px; height: 2px;">
{{--                <div class="for_table">--}}
{{--                    <h4>4{{__('about.about_article_two')}}</h4>--}}
{{--                    <p class="delivery-text text-center p-4">5{{__('about.about_text_two')}}</p>--}}
{{--                </div>--}}
            </div>
        </div>
        <link rel="preload" href="/img/about/toydgan_photo.jpg" as="image" />
        <link rel="preload" href="/img/about/olesya_photo.jpg" as="image" />
        <link rel="preload" href="/img/about/alla_photo.jpg" as="image" />
        <link rel="preload" href="/img/about/vladimir_photo.jpg" as="image" />
        <link rel="preload" href="/img/about/dana_photo.jpg" as="image" />
        <link rel="preload" href="/img/about/yana_photo.jpg" as="image" />
        <link rel="preload" href="/img/about/eva_photo.jpg" as="image" />
        <link rel="preload" href="/img/about/vlad_photo.jpg" as="image" />
        <div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                        <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_1')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_1')}}</p></h2>
                        <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/toydgan_avatar.jpg"
                             class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div>

        <div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                    <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_2')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_2')}}</p></h2>
                    <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/olesya_avatar.jpg"
                             class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div>

        <div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                    <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_3')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_3')}} </p></h2>
                    <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/alla_avatar.jpg"
                             class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div>

        <div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                    <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_4')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_4')}}</p></h2>
                    <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/vladimir_avatar.jpg"
                             class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div>

        <div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                    <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_5')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_5')}}</p></h2>
                    <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/dana_avatar.jpg"
                             class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div>
        <div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                    <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_6')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_6')}}</p></h2>
                    <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/yana_avatar.jpg"
                           class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div>

        <div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                    <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_7')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_7')}}</p></h2>
                    <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/eva_avatar.jpg"
                             class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div><div class="about_game_container section">
            <div class="container">
                <div class="column featurette justify-content-center align-items-center align-content-center">
                    <h2 class="col-lg-10 col mx-auto delivery-article pt-3 fs-1 text-center mb-2">{{__('about.creator_title_8')}} <br><p class="delivery-text" style="font-size: 24px;">{{__('about.creator_name_8')}}</p></h2>
                    <hr class="bg-secondary" style="margin:auto; width: 300px; height: 2px;">
                    <div class="d-flex align-items-center justify-content-center avatar_photo col-md-5 order-md-1 d-flex mx-auto mt-3 ">
                        <div class="click_me"></div>
                        <img src="/img/about/vlad_avatar.jpg"
                             class="aside_photo user_shadow rounded bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto " alt="" style="max-width: 300px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- IMAGE !LEGT -->

@endsection
