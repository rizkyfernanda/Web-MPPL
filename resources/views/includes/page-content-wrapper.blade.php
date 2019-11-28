    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush">

      <div class="row my-3 mx-1">

          <div class="col-5 my-auto">
            <img class="user-pic w-100" style="border-radius: 12px;" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="">
          </div>

          <div class="col-7 pl-0 my-auto">
          @guest
              You're here as guest<br>
              <a href="{{ route('login') }}">{{ __('Login') }}</a><br>

          @else
              Welcome<span>
              <b>{{ Auth::user()->name }}</span></b>
          @endguest
          </div>
      </div>
      
      </div>

        <a href="#" class="list-group-item list-group-item-action bg-light">Favorites</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Saved</a>
        @guest
        @else
        <a class="list-group-item list-group-item-action bg-light" href="{{ route('logout') }}"
                    onclick="
                    event.preventDefault();
                             document.getElementById('logout-form').submit();
                    ">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
        @endguest

      </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button class="navbar-toggler" id="menu-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" id="hamburger"></span>
      </button>

      
        <a href="/"><img id="logo" src="image/logo.jpeg"/></a>

        <button class="navbar-toggler" type="button"  >
          <span class="navbar-toggler-icon" id="bell"></span>
         </button> 

      </nav>