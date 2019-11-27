    @extends('layouts.default-no-navbar')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/search-result.css') }}" rel="stylesheet">
    @endpush
    <div class="row header">
      <div class="col-1 vertical-middle">
      <i class="fas fa-chevron-left fa-lg"></i>
      </div>
      <div class="offset-3 col-6 title">
        Housekeeper result
      </div>
    </div>
    <div class="container">
      <div class="row upper-info">
        <div class="col-3">
          <div class="count">
            2 5
          </div>
          <div class="suffix purple">
            Candidate
          </div>
        </div>
        <div class="col-9">
          <div class="purple">Yeay we found a <span class="yellow">perfect choice</span> according to your plan</div>
        </div>
      </div>

      <div class="row float-right">
        <div class="col-12">
          <button class="purple edit-button" type="button">EDIT PREFERENCES</button>
        </div>
      </div>
      <br>
      <div class="row info-wrapper">
        <div class="col-6 maids-info left">
          <img src="../image/maid.png"/>
          <div class="maids-detail">
            <div class="name">Maids Name</div>
            <div class="desc">Maids description</div>
          </div>          
        </div>
        <div class="col-6 maids-info right">
          <img src="../image/maid.png"/>
          <div class="maids-detail">
            <div class="name">Maids Name</div>
            <div class="desc">Maids description</div>
          </div>          
        </div>
        <div class="col-6 maids-info left">
          <img src="../image/maid.png"/>
          <div class="maids-detail">
            <div class="name">Maids Name</div>
            <div class="desc">Maids description</div>
          </div>          
        </div>
        <div class="col-6 maids-info right">
          <img src="../image/maid.png"/>
          <div class="maids-detail">
            <div class="name">Maids Name</div>
            <div class="desc">Maids description</div>
          </div>          
        </div>
      </div>
    </div>