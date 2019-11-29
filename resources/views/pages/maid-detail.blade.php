    @extends('layouts.default-no-navbar')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/maid-details.css') }}" rel="stylesheet">
    @endpush
    @push('scripts')
      <script src="{{ asset('js/WA.js') }}"></script>
    @endpush
    <div class="row header">
      <div class="col-1 vertical-middle">
      <a onclick="history.back()"><i class="fas fa-chevron-left fa-lg"></i></a>
      </div>
      <div class="offset-3 col-6 title">
        Housekeeper Profile
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6 upper-info left">
          <img class="maid-photo" src="../image/maid.png">
        </div>
        <div class="col-6 upper-info right">
          <div class="name purple">
            {{ $maid->name }}
            <img onclick="saveMaid({{$maid->maid_id}})" src="../icon/bookmark{{($is_saved) ? '(1)' : ''}}.svg" class="float-right bookmark">
          </div>
          <p class="info"><img src="../icon/age.jpeg"/>{{ $maid->age }} Years old</p>
          <p class="info"><img src="../icon/salary.jpeg"/>Rp {{ $maid->salary }}/month</p>
          <p class="info"><img src="../icon/married.jpeg"/>{{ $married[$maid->married] }}</p>
          <p class="info"><img src="../icon/settled.jpeg"/>{{ $settled[$maid->settled] }}</p>
          <p class="info"><img src="../icon/religion.jpeg"/>{{ $maid->religion }}</p>
          <p class="info"><img src="../icon/experience.jpeg"/>{{ $maid->exp_years }} year experience</p>
        </div>
      </div>

      <div class="subcontent-title purple">
        <div class="title-text">Description</div>
        <p class="desc">
          {{ $maid->description }}
      </p>
      </div>

      <div class="subcontent-title purple">
        <div class="title-text"> Ability </div>
        <div class="row">
          @foreach ($abilities as $ability)
            <div class="col-auto tags">
              {{ $ability->ability }}
            </div>
          @endforeach
        </div>
      </div>

      <div class="subcontent-title purple">
        <div class="title-text"> Additional preferences </div>
        <div class="row">
          @foreach ($preferences as $preference)
            <div class="col-auto tags">
              {{ $preference->preference }}
            </div>
          @endforeach
        </div>
      </div>

      <div class="subcontent-title purple last">
        <div class="title-text"> Past Career</div>
        <div class="timeline">
          @foreach ($careers as $career)
          <div class="container-tl right">
            <div class="content-tl">
              <div class="career-title">{{$career->description}}</div>
              <div class="career-subtitle">{{$career->startdate}} s.d. {{$career->enddate}}</div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
      <div class="row btn-container">
        <div class="col-8 btn-wrapper">
          <button onclick="WA()" class="btn-yellow" type="button"> I WANT TO HIRE HER </button>
        </div>
      </div>

    </div>