<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="{{ url('/') }}">
      神武百宝箱
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{request()->is('topics') || request()->is('/') ? 'active': ''}}">
          <a class="nav-link" href="{{ route('topics.index') }}">首页</a>
        </li>
        <li class="nav-item {{request()->is('categories/1') ? 'active': ''}}">
          <a class="nav-link" href="{{ route('categories.show', 1) }}">公告</a>
        </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        @else
        <li class="nav-item">
          <a class="nav-link mt-1 mr-3 font-weight-bold" href="{{ route('topics.create') }}">
            <i class="fa fa-plus"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            @if (Auth::user()->avatar)
            <img src="{{  Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
            @endif
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
              <i class="far fa-user"></i> 个人中心
            </a>
            <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
              <i class="far fa-edit"></i> 编辑资料
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="logout" href="#">
              <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('您确定要退出吗？');">
                {{ csrf_field() }}
                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
              </form>
            </a>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
