<!doctype html>
    <html>

    <head>
       @include('includes.head')
    </head>

    <body>

    <!-- Wrapper -->
    <div class="d-flex" id="wrapper">

      <!-- Page Content Navigation and Sidebar -->

      <!-- Content -->
      <div class="container-fluid">
        @yield('content')
      </div>

    </div>
    </div>

    <!-- Scripts -->
    @include('includes.page-scripts')

    </body>
    </html>