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
  <link rel="apple-touch-icon-precomposed" href="{{config('app.url'). "/images/shared/logo.png"}}" />

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">

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
  <script type="text/javascript">
    if (("standalone" in window.navigator) && window.navigator.standalone) {
      var noddy, remotes = false;
      document.addEventListener('click', function (event) {
        noddy = event.target;
        while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
          noddy = noddy.parentNode;
        }
        if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !==
            -1 || remotes)) {
          event.preventDefault();
          document.location.href = noddy.href;
        }
      }, false);
    }

  </script>
  @yield('scripts')
</body>

</html>
