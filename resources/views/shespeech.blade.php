@extends('layouts.app')
@section('title-content')
    She speech - Она говорит
@endsection
@section('content')
    <div id="delivery" class="d-flex flex-column align-items-center justify-content-center shespeech-container section " data-percentage="80">
        <img class="d-flex align-items-center justify-content-center mx-3 img-fluid " style="margin: 0px 10px;"     src="/img/sheSpeech/page1.JPG" alt="Slide 1">
        <img class="d-flex align-items-center justify-content-center mx-3 img-fluid " style="margin: 0px 10px;"     src="/img/sheSpeech/page2.JPG" alt="Slide 2">
        <img class="d-flex align-items-center justify-content-center mx-3 img-fluid " style="margin: 0px 10px;"     src="/img/sheSpeech/page3.JPG" alt="Slide 3">
        <img class="d-flex align-items-center justify-content-center mx-3 img-fluid " style="margin: 0px 10px;"     src="/img/sheSpeech/page4.JPG" alt="Slide 4">
        <img class="d-flex align-items-center justify-content-center mx-3 img-fluid " style="margin: 0px 10px;"     src="/img/sheSpeech/page5.JPG" alt="Slide 5">
        <img class="d-flex align-items-center justify-content-center mx-3 img-fluid " style="margin: 0px 10px;"     src="/img/sheSpeech/page6.JPG" alt="Slide 6">
{{--        <img class="d-flex align-items-center justify-content-center mx-3 img-fluid " style="margin: 0px 10px;"     src="/img/sheSpeech/page7.JPG" alt="Slide 7">--}}
        <div class="she-speech-contacts d-flex align-items-center justify-content-center flex-wrap-reverse">
            <div class="">
                <h2 class="text-dark" style="font-family: Roboto; font-weight: bold;"><span style="color: #F37D83; font-family: Roboto; font-weight: bold;">Контакты</h2>
                <h3>Нажмите на кантокты</h3>
                <div class="she-speech-cont ">
                    <p class="text-dark" style="text-shadow: none; font-weight: bold; padding-bottom: 5px;" >Администратор проекта</p>
                    <p class="text-dark" style="text-shadow: none;" >WhatsApp – Яна Баимбетова</p>
                    <a class="text-dark" style="text-shadow: none;"  href="#">+7 962 118-06-17</a>
                </div>
                <div class="she-speech-cont text-black">
                    <p class="text-dark" style="text-shadow: none; font-weight: bold; margin-bottom: 5px;" >Задать вопросы</p>
                    <p class="text-dark" style="text-shadow: none;" >Олеся Лазарева</p>
                    <a class="text-dark" style="text-shadow: none;"  href="https://taplink.cc/olesyalazarevalove_">Taplink</a>
                </div>
                <div class="she-speech-cont text-black">
                    <p class="text-dark" style="text-shadow: none; font-weight: bold; padding-bottom: 5px;" >Instagram</p>
                    <p class="text-dark" style="text-shadow: none;" >@olesyalazarevalove</p>
                    <a class="text-dark" style="text-shadow: none;"  href="https://instagram.com/olesyalazarevalove?igshid=NWRhNmQxMjQ=">Instagram</a>
                </div>
            </div>
            <div class="px-4 olesyaphoto"><img src="/img/sheSpeech/olesya.png" height="400px" alt=""></div>

        </div>

        <div class="d-flex align-items-center justify-content-center mb-4">
            <div class="mt-5 d-flex align-items-center justify-content-center  element-animation ">

                <a class="to_bot_btn text-center font-weight-light text-white text-decoration-none align-items-center d-flex justify-content-center" href="http://psy.olesya.vladimirovna.tilda.ws" target="_blank" class="mx-2">
                    Купить
                </a>
            </div>
        </div>
    </div>
@endsection
