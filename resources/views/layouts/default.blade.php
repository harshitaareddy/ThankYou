<!doctype html>
<html lang=" en">

@include ('includes.head')

<body>

<div class="container">
    <header>
        @include('includes.menu')
    </header class="container">
    <main role="main">
        @yield('content')

        @include('includes.jsfooter')
        <footer>
            @include('includes.footer')
        </footer>
</div>
</body>
</html>