<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        /*  анимированные переходы между компонентами */

        .component-fade-enter-active,
        .component-fade-leave-active {
            transition: opacity .3s ease;
        }

        .component-fade-enter,
        .component-fade-leave-to

        /* .component-fade-leave-active до версии 2.1.8 */
            {
            opacity: 0;
        }

    </style>
</head>

<body>


    <div id="app">
        <v-header></v-header>
        
        <!-- анимированные переходы между компонентами -->
        <transition name="component-fade" mode="out-in">
            <router-view></router-view>
        </transition>
        <!-- END -->

    </div>


    <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
