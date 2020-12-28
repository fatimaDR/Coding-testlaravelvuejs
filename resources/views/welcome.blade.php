<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>Laravel</title>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/products" class="nav-link">Products</router-link>
                </li>
            </ul>
        </nav><br />
        <transition name="fade">
            <router-view></router-view>
        </transition>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>