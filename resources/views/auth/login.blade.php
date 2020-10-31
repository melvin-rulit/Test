@extends('layouts.app')
@section('block-title')Список контактов@endsection

<!-- красивая форма для авторизации -->

@section('tests')
<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>

    <form name="login-form" class="login-form" method="POST" action="{{ route('loginSubmit') }}">
        @csrf

        <div class="header">
            <h1>{{__(' Авторизация') }}</h1>

            <!-- это условие проверяет есть ли в Сессии ключ "error" и если да, то выводит сообщение из 
            app/Http/Controllers/Api/Auth/LoginController.php-->

            @if(Session::has('error'))
            <span style ="color:red;">{{ Session::get('error') }}</span>
            @else
            <span>Введите ваши регистрационные данные для входа в ваш личный кабинет. </span>
            @endif
        </div>


        <div class="content">

            <label for="email" class="">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class=" input username" name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus>
            </div>

            <label for="password" class="">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="input username" name="password" required
                    autocomplete="current-password">

            </div>
        </div>

        <div class="footer">
            <input type="submit" name="submit" value="ВОЙТИ" class="button" />
            <!-- <input type="submit" name="submit" value="Регистрация" class="register" /> -->
        </div>

    </form>
</div>
<!-- <div class="gradient"></div> -->



@endsection
