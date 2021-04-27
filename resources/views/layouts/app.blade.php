<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @yield('css-home')
    @yield('css-add')
    @yield('css-drying')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="container-nav">
            <ul>
                <li><a class="{{ request()->is('home') ? 'active' : null }}" href="{{ url('/home') }}"><img src="{{ asset('assets/home-alt.svg') }}"></a></li>
                <li>
                    <a class="{{ request()->is('chart') ? 'active' : '' }}" href="/detail/1">
                        <img src="{{ asset('assets/cart.svg') }}" alt="">
                    </a>
                </li>
                <li><a href="#notification"><img src="{{ asset('assets/bell.svg') }}"></a></li>
                <li><a href="/gabah/kering"><img src="{{ asset('assets/sun.svg') }}"></a></li>
                <li><a class="add {{ request()->is('gabah/add') ? 'active' : '' }}" href="/gabah/add"><img src="{{ asset('assets/plus.svg') }}"></a></li>
            </ul>
        </div>
    @yield('content')

    <script src="{{ asset('js/Data.js') }}"></script>

</body>
</html>