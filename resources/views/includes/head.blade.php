  <meta name="_token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500,600,700,900&display=swap" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/global.css') }}" rel="stylesheet">
  
  @stack('styles')
  <!-- Ajax for live search -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>