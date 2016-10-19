<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if($title){{ $title }}@endif</title>
    <link onerror="alert('maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css is down');"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link onerror="alert('maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css is down');"
          href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="{{ elixir('css/mystyle_from_sass.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/mystyle_from_less.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

@yield('content')

{{--JQUERY--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{--If jquery don't downloaded from CDN--}}
<script>window.jQuery || document.write('<script src={{ elixir('js/jquery.js') }}><\/script>')</script>
{{--BOOTSTRAP JS--}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--CkEditor--}}
{{--<script src="//cdn.ckeditor.com/4.5.11/full-all/ckeditor.js"></script>--}}
{{--All my SCRIPTS aggregated from gulpfile--}}
<script src={{ elixir('js/all.js') }}></script>
{{--Insert my custom JScripts from blade templates--}}
@yield('blade_scripts')
</body>
</html>