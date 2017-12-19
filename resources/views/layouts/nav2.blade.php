
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index"> <img id='imagelogo' src="/img/logo2.png"/> </a>
    </div>
    <ul class="nav navbar-nav">
      @guest
                            <li><a href="{{ route('login') }}" class='navbar-btn'>Login</a></li>
                            <li><a href="{{ route('register') }}" class='navbar-btn'>Register</a></li>
                        @else
      <li @if(Request::path() === 'post') class="active" @endif><a class='navbar-btn navbar-btnbright' href="/post">Create Post</a></li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle nav-link navbar-btn" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="nav-item">
              <a class="nav-link" href="/user">
                   Profile
              </a><a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
        </ul>
      </li>
      @endif
    </ul>
  </div>
</nav>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
