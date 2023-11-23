@extends('layout.app')

@section('content')
    <header>
        <nav class="navbar navbar-expand-lg animate__animated animate__zoomIn">
            <div class="d-flex justify-content-between container mt-2 ">
                <a class="navbar-brand" href="#"><img src="{{ asset('public/assets/img/logoFM.svg') }}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{ asset('public/assets/img/menu.svg') }}">
                </button>
                <div class="container-fluid collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Обо мне</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Наставничество</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мероприятия</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Кейсы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                    </ul>

                </div>
                <div class="w-25 d-flex justify-content-evenly align-items-center">
                    <div class="circle">
                        <img src="{{ asset('public/assets/img/phone.svg') }}" alt="">
                    </div>
                    <div class="navbar-phone" id="phone">
                        8-345-123-34-45
                    </div>
                </div>
            </div>
        </nav>

        <div class="header-main container d-flex">
            <div class="header-main-content container d-flex flex-column justify-content-evenly animate__animated animate__fadeInLeftBig">
                <div class="header-main-title container">
                    Создаю условия
                    для вашего успеха
                </div>
                <div class="header-main-subtitle container">
                    Когда ваше время и энергия лучше сфокусированы, стремление к новым возможностям становится
                    реальностью, ваш успех зависит от ваших действий
                </div>

                <div class="header-main-subtitle-mobile container">
                    Ваш успех зависит от ваших действий
                </div>

                <div class="header-main-buttons d-flex justify-content-between container">
                    <button class="header-btn btn-signup"><span class="me-auto">Записаться на консультацию</span>
                        <div class="btn-rect"><img src="{{ asset('public/assets/img/Vector.svg') }}"></div>
                    </button>
                    <button class="header-btn btn-free"><span class="me-auto">Бесплатная консультация</span>
                        <div class="btn-rect"><img src="{{ asset('public/assets/img/Vector2.svg') }}"></div>
                    </button>
                </div>

                <div class="header-main-buttons-mobile d-flex justify-content-between container">
                    <button class="header-btn btn-signup"><span class="me-auto">Записаться</span>
                        <div class="btn-rect"><img src="{{ asset('public/assets/img/Vector.svg') }}"></div>
                    </button>
                    <button class="header-btn btn-free btn-free-mobile"><span class="me-auto">Заказать звонок</span>
                        <div class="btn-rect"><img src="{{ asset('public/assets/img/Vector2.svg') }}"></div>
                    </button>
                </div>

                <div class="header-main-info d-flex">
                    <div class="header-main-info-card w-50">
                        <div class="header-main-info-title">
                            {{ $date_sum }}+
                        </div>
                        <div class="header-main-info-text">
                            техник для достижения целей
                        </div>
                        <div class="header-main-info-text-mobile">
                            техники
                        </div>
                    </div>
                    <div class="header-main-info-card w-50">
                        <div class="header-main-info-title">
                            {{ $GBP }}%
                        </div>
                        <div class="header-main-info-text">
                            увеличение личной продуктивности
                        </div>
                        <div class="header-main-info-text-mobile">
                            продуктивности
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mentor animate__animated animate__fadeInRightBig">
                <img src="{{ asset('public/assets/img/mentor.png') }}" alt="" class="header-mentor-img">
            </div>
        </div>

        <div id="sidebar-view" class="@if($errors->isEmpty() and !\Illuminate\Support\Facades\Session::has('success'))d-none @endif ">
            <div id="sidebar" class="d-flex flex-column justify-content-center align-items-center">
                <div class="sidebar-close">
                    <img src="{{ asset('public/assets/img/cross.svg') }}" alt="">
                </div>

                @if(!\Illuminate\Support\Facades\Session::has('success'))
                    <div class="sidebar-form d-flex flex-column w-75">

                        <div class="sidebar-title">
                            Закажите обратный звонок
                        </div>

                        <form class="mt-5" method="post" action="{{ route('make_feedback') }}">
                            @csrf
                            @method('post')
                            <div class="mb-5">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="emailHelp"
                                       placeholder="Имя" required>
                                @error('name')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="mb-5">
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Телефон" required>
                                @error('phone')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input type="checkbox" name="agree" class="form-check-input @error('agree') is-invalid @enderror" id="exampleCheck1"
                                       required>
                                <label class="form-check-label" for="exampleCheck1">Согласен на сохранение и обработку
                                    персональных данных</label>
                                @error('agree')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="header-btn btn-submit"><span class="me-auto">Заказать обратный звонок</span>
                                <div class="btn-rect"><img src="{{ asset('public/assets/img/Vector2.svg') }}"></div>
                            </button>
                        </form>
                    </div>
                @endif

                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="d-flex flex-column justify-content-center align-items-center w-75">
                        <div class="sidebar-title mb-5 w-50">
                            Спасибо
                            за заявку
                        </div>
                        <div class="sidebar-title mt-5 text-center">
                            Я обязательно
                            свяжусь с вами
                            в ближайшее время.
                        </div>
                    </div>
                @endif

            </div>
        </div>

    </header>
@endsection




