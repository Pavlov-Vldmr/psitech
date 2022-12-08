@extends('layouts.app')
@section('title-content')
    PsiTech. Admin Panel
@endsection
@section('content')
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
        <div class=" delivery-container bg-dark" style="padding-top: 50px;">


            <div class="flex-shrink-0 p-3 bg-dark opacity-75" style="width: 280px; min-height: 100vh;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 text-white text-decoration-none border-bottom">
                    <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-5 fw-semibold">Admin Panel</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Главная
                        </button>
                        <div class="collapse show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="text-white rounded">Casino69</a></li>
                                <li><a href="#" class="text-white rounded">Mystic</a></li>
                                <li><a href="#" class="text-white rounded">MaxRelax</a></li>
                                <li><a href="#" class="text-white rounded">Casino - deep</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Игры
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="text-white rounded">Casino69</a></li>
                                <li><a href="#" class="text-white rounded">Mystic</a></li>
                                <li><a href="#" class="text-white rounded">MaxRelax</a></li>
                                <li><a href="#" class="text-white rounded">Casino - deep</a></li>
                            </ul>
                        </div>
                    </li>
                    <ul class="mb-1 btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="text-white rounded">О нас</a></li>
                        <li><a href="#" class="text-white rounded">Будущее</a></li>
                    </ul>
{{--                    <li class="mb-1">--}}
{{--                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">--}}
{{--                            Orders--}}
{{--                        </button>--}}
{{--                        <div class="collapse" id="orders-collapse">--}}
{{--                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">--}}
{{--                                <li><a href="#" class="text-white rounded">New</a></li>--}}
{{--                                <li><a href="#" class="text-white rounded">Processed</a></li>--}}
{{--                                <li><a href="#" class="text-white rounded">Shipped</a></li>--}}
{{--                                <li><a href="#" class="text-white rounded">Returned</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="border-top my-3"></li>--}}
{{--                    <li class="mb-1">--}}
{{--                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">--}}
{{--                            Account--}}
{{--                        </button>--}}
{{--                        <div class="collapse" id="account-collapse">--}}
{{--                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">--}}
{{--                                <li><a href="#" class="text-white rounded">New...</a></li>--}}
{{--                                <li><a href="#" class="text-white rounded">Profile</a></li>--}}
{{--                                <li><a href="#" class="text-white rounded">Settings</a></li>--}}
{{--                                <li><a href="#" class="text-white rounded">Sign out</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>
            </div>

        </div>
@endsection
