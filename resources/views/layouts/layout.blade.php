<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja-Laravel</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Font-awsone --}}
    <link rel="stylesheet" href="{{ asset("assets/font-awsome/css/all.min.css") }}">
    {{-- Owl-carousel --}}
    <link rel="stylesheet" href="{{ asset("assets/owlcarousel/assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/owlcarousel/assets/owl.theme.default.min.css")}}">
</head>
<body class="fade-in">

    @yield('content')


{{-- Scripts --}}

{{-- Bootstrap --}}
<script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

{{-- Font-Awsome --}}
<script src="{{ asset('assets/font-awsome/js/all.min.js')}}"></script>

{{-- Jquery --}}

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

{{-- Owl-carousel --}}
<script src="{{ asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            items: 3,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });
    });
</script>


</body>
</html>
