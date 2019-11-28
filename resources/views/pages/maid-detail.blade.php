    @extends('layouts.default-no-navbar')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/maid-details.css') }}" rel="stylesheet">
    @endpush
    <div class="row header">
      <div class="col-1 vertical-middle">
      <i class="fas fa-chevron-left fa-lg"></i>
      </div>
      <div class="offset-3 col-6 title">
        Housekeeper Profile
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-6 upper-info">
          <img src="image/maid.php">
          

        </div>
      </div>
    </div>