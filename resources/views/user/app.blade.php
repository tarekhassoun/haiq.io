<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>

    @include('user.partials.styles')
</head>

<body class="theme-{{ $theme_class }}">

<!-- @include('user.partials.sidebar') -->

<div class="main">
@include('user.partials.header')
@yield('content')
@include('user.partials.footer')
</div>

@include('user.partials.scripts')

</body>
</html>