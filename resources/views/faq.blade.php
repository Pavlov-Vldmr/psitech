@extends('layouts.app')
@section('title-content')
    PsiTech. FAQ
@endsection
@section('content')
    <div id="delivery" class="delivery-container section pb-3" data-percentage="80">
        <div class="slide">
            <div class="container">
                <h2 class="delivery-article text-center p-4">FAQ</h2>
{{--                <h4>2{{__('about.about_article_one')}}</h4>--}}
                <p class="delivery-text text-center p-4" style="font-size: 1.3em;">Найди ответ на один из самых популярных вопросов</p>
{{--                <div class="for_table">--}}
{{--                    <h4>4{{__('about.about_article_two')}}</h4>--}}
{{--                    <p class="delivery-text text-center p-4">5{{__('about.about_text_two')}}</p>--}}
{{--                </div>--}}
            </div>
        </div>
        <!--Section: FAQ-->
        <section class="container mt-5">
{{--            <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3>--}}


            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-uppercase text-white"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
                        question?</h6>
                    <p>
                        <strong><u>Absolutely!</u></strong> We work with top payment companies which guarantees
                        your
                        safety and
                        security. All billing information is stored on our payment processing partner.
                    </p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-uppercase text-white"><i class="fas fa-pen-alt text-primary pe-2"></i> A question
                        that
                        is longer then the previous one?</h6>
                    <p>
                        <strong><u>Yes, it is possible!</u></strong> You can cancel your subscription anytime in
                        your
                        account. Once the subscription is
                        cancelled, you will not be charged next month.
                    </p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-uppercase text-white"><i class="fas fa-user text-primary pe-2"></i> A simple
                        question?
                    </h6>
                    <p>
                        Currently, we only offer monthly subscription. You can upgrade or cancel your monthly
                        account at any time with no further obligation.
                    </p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-uppercase text-white"><i class="fas fa-rocket text-primary pe-2"></i> A simple
                        question?
                    </h6>
                    <p>
                        Yes. Go to the billing section of your dashboard and update your payment information.
                    </p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-uppercase text-white"><i class="fas fa-home text-primary pe-2"></i> A simple
                        question?
                    </h6>
                    <p><strong><u>Unfortunately no</u>.</strong> We do not issue full or partial refunds for any
                        reason.</p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <h6 class="mb-3 text-uppercase text-white"><i class="fas fa-book-open text-primary pe-2"></i> Another
                        question that is longer than usual</h6>
                    <p>
                        Of course! We’re happy to offer a free plan to anyone who wants to try our service.
                    </p>
                </div>
            </div>
        </section>
        <!--Section: FAQ-->


    </div>

    <!-- IMAGE !LEGT -->

@endsection
