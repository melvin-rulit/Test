<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div>
            <h1 class="display-5 wow pulse">Приветствую на моём сайте</h1>
        </div>

        <div>

        <!-- если у сессии есть этот ключ: flash.message то выведем значение этого ключа из App\Http\Controllers\Api\Auth\RegisterController-->

        @if (Session::has('flash.message'))
        <a href= "/api/login"><div class=""><strong>{{ Session::get('flash.message') }}</strong></div></a>
        @endif

        <!-- если у сессии есть этот ключ: login.message то выведем значение этого ключа из App\Http\Controllers\Api\Auth\LoginController-->

        @if (Session::has('login.message'))
        <div class=""><strong>{{ Session::get('login.message') }}</strong></div>
        @endif


        </div>
    </div>
</div>
