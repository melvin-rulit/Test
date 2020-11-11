<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="app" >
        <v-header></v-header>
        <router-view></router-view>
    </div>
    </div>


    </div>
    <!-- User script -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
