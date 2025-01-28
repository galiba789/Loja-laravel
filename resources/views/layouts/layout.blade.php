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
</head>
<body>
 
    @yield('content')


{{-- Scripts --}}

{{-- Bootstrap --}}
<script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

{{-- Font-Awsome --}}
<script src="{{ asset('assets/font-awsome/js/all.min.js')}}"></script>
</body>
</html>
