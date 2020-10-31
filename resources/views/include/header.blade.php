
    <nav class="my-2 my-md-0 mr-md-3 nav-link ">
        <a class="p-1 text-dark" href="{{ route('home') }}">Портфолио</a>
        <a class="p-2 text-dark" href="{{ route('profile') }}">Обо мне</a>
        <a class="p-2 text-dark" href="{{ route('section') }}">tests</a>
        <a class="p-2 text-dark" href="{{ route('article.index') }}">Статьи</a>
    </nav>
    <!-- <div class=" ">
        <small><a class="btn btn-outline-primary display-4" href="{{ route('signup') }}">Связь со мной</a>
        </small>
    </div> -->
 <!-- Ссылки для аутентификации -->
                        @guest
                            <li class="">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизации') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown red">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span> {{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
