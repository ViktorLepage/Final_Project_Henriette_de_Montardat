<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
#pageContainer{
    position: relative;
    min-height: 100vh;
}
#contentWrap{
    padding-bottom: 2.5rem;
}
#footer{
    position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;
}
</style>

</head>

<body>

    <div id="pageContainer">
        <div id="contentWrap">
<header>@include('Layouts/headerTemplate')</header>
</div>


<footer id="footer">@include('Layouts/footerTemplate')</footer>
</div>
</body>

</html>
