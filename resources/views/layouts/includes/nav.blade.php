<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('img/iSimplify.png')}}" style="width: 9vw;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="button-container nav-item iframe-extern">
                    <a href="{{route('register')}}" class="btn  btn-rose   btn-round btn-block">
                        <i class="material-icons">add</i> Join
                    </a>
                </li>
            @else
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">account_circle</i> {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        {{-- <a href="{{route('profile.show', Auth::user()->name)}}" class="dropdown-item">
                            <i class="material-icons">info</i> Profile
                        </a> --}}
                        <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="material-icons">exit_to_app</i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
</nav>
