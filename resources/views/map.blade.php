@extends('layouts.app')
@section('title-content')
    PsiTech. Osiris - виртуальный город.
@endsection
@section('content')

        <div id="delivery" class="d-flex flex-column align-items-center justify-content-center delivery-container section pb-3" data-percentage="80">
            <h2 class="delivery-article fs-1 text-center">Osiris</h2>
            <p class=" fs-6 font-italic font-weight-light text-center">в разработке</p>
            <hr class="bg-secondary mb-3" style=" width: 270px; height: 2px;">


                <form class="form-inline d-flex flex-row justify-content-start">
                    <input id="search_area_input" class="form-control mr-sm-2 mr-3" type="search" placeholder="Search area" aria-label="Search">
                    <a id="search_area_btn" class="btn btn-outline-success my-2 my-sm-0" >Search</a>
                </form>



            <div id="vmap" style="width: 1000px; height: 500px; " class="mt-3"></div>
            <div id="buy_area_block" style="display: none; position: absolute;" class="flex-column align-items-center justify-content-center mx-auto">
{{--                <a id="buy_area_block__close" class="text-center" href="#" style="position: absolute; text-decoration: none; border-radius: 2px; top: 10%; right: 10%; width: 20px; height: 20px; background-color: #0A0A0A; color: white; ">X</a>--}}
                <button id="buy_area_block__close" type="button" class="btn-close" aria-label="Close" style="position: absolute;top: 10%; right: 10%;"></button>
                <h2 class="text-center mt-3"></h2>
                <p class="text-center"></p>
{{--                <a id="buy_area_button" class="" href="#">buy area</a>--}}
                <button id="buy_area_button" class="btn btn-success mt-3" type="button">Buy area</button>
            </div>
{{--            <div id="myOverlay" ></div>--}}


        </div>



@endsection
