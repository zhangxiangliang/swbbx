<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', '神武百宝箱') | 神武百宝箱</title>
  <meta name="description" content="@yield('description', '神武百宝箱')" />
  <meta name="keyword" content="@yield('keyword', '神武百宝箱')" />

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  <meta name="theme-color" content="#00B5AE" />
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="apple-touch-icon-precomposed" href="{{config('app.url'). "/images/shared/logo.png"}}" />

  @yield('styles')
</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  @yield('scripts')

  <script type="text/javascript">
    document.write(unescape(
      "%3Cspan style='display:none;' id='cnzz_stat_icon_1278911242'%3E%3C/span%3E%3Cscript src='https://v1.cnzz.com/z_stat.php%3Fid%3D1278911242' type='text/javascript'%3E%3C/script%3E"
    ));

  </script>
</body>

</html>
