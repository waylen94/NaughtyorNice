<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', 'Mint') - NaughtyorNice</title>

<!-- Styles -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>


@include('layouts._header')
<div class="container">
<!-- @include('shared._messages') -->
</div>
<div id="app" class="{{ route_class() }}-page">
@yield('content')
@include('layouts._footer')
</div>




<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="js/vis.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>