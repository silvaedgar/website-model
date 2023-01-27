<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Model</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css') }}/styles.css" rel="stylesheet">
    <link href="{{ asset('css') }}/style-menu-responsive.css" rel="stylesheet">
    @yield('css')
</head>

<body style="background-color: {{ isset($bgBody) ? $bgBody: '#f0f0f0'}}">
    @auth
    <!--========== HEADER ==========-->
    @include('layouts.navbar.navbar')
    @include('layouts.sidebar.auth')
    <div class="content">
        @yield('content')
    </div>
    <!--========== CONTENTS ==========-->
    @else
    @include('layouts.sidebar.guest')
    <div style="margin-top: 5rem; ">
        @yield('content')
    </div>
    @endauth


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="{{asset('js')}}/my-menu.js"></script>
    <script>
        function closeSession(object) {
                if (confirm("Seguro que desea Cerrar la Sesion ? "))
                    object.closest('form').submit()
            }
    </script>
    @stack('js')
</body>

</html>
