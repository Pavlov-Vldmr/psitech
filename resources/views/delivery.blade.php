@extends('layouts.app')
@section('title-content')
    PsiTech. {{__('delivery.delivery_title')}}
@endsection
@section('content')
        <div id="delivery" class="delivery-container section pb-3" data-percentage="80">
            <div class="slide">
                <div class="container">
{{--                    <h1 class="delivery-article text-center p-4"> {{__('delivery.delivery_title')}}</h1>--}}

                    <div class="future-discription container d-flex flex-column justify-content-center align-items-center for_table">
                        <h2>{{__('delivery.delivery_rule_article')}}</h2>
                        <hr class="bg-secondary" style="margin:auto; width: 270px; height: 2px;">
                        <p class="col-lg-10 delivery-text p-4">{{__('delivery.delivery_text_one')}}</p>
                        <h2>{{__('delivery.delivery_return')}}</h2>
                        <hr class="bg-secondary" style="margin:auto; width: 270px; height: 2px;">
                        <p class="col-lg-10 delivery-text  p-4">{{__('delivery.delivery_text_two')}}</p>

                    </div>

                </div>
            </div>
{{--            <div class="slide for_mobile">--}}
{{--                <div class="container">--}}
{{--                    <!-- <h3 class="delivery-article text-center">Доставка</h3> -->--}}
{{--                    --}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="slide">--}}
{{--                <div class="container">--}}
{{--                    <h4 class="p-4">Как добраться</h4>--}}
{{--                    <!-- <img src="/img/map.PNG" class="rounded d-block bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="80%" height="60%" alt=""> -->--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
@endsection
