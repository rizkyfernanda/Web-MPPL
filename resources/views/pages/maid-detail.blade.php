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
        <div class="col-6 upper-info left">
          <img class="maid-photo" src="image/maid.png">
        </div>
        <div class="col-6 upper-info right">
          <div class="name purple">
            Eni Setiadi
          </div>
          <p class="info"><img src="icon/age.jpeg"/>22 Years old</p>
          <p class="info"><img src="icon/salary.jpeg"/>Rp 1.600.000/month</p>
          <p class="info"><img src="icon/married.jpeg"/>Not married</p>
          <p class="info"><img src="icon/settled.jpeg"/>No</p>
          <p class="info"><img src="icon/religion.jpeg"/>Moslem</p>
          <p class="info"><img src="icon/experience.jpeg"/>1 year experience</p>
        </div>
      </div>

      <div class="subcontent-title purple">
        <div class="title-text">Description</div>
        <p class="desc">
          Sust. Eni berasal dari Pemalang berpengalaman mengasuh anak usia 3-4 tahun
          di brebes. Bisa naik motor, berpengalaman, siap mengerjakan semua tugas rumah,
          berbenah, setrika, sigap, trampil, bisa diandalkan, pandai memasak, bisa memasak
          masakan korea.
      </p>
      </div>

      <div class="subcontent-title purple">
        <div class="title-text"> Ability </div>
        <div class="row">
          <div class="col-auto tags">
            Cleaning House
          </div>
          <div class="col-auto tags">
            Cooking italian
          </div>
          <div class="col-auto tags">
            Using washing machine
          </div>  
          <div class="col-auto tags">
            Washing baby clothes
          </div>
        </div>
      </div>

      <div class="subcontent-title purple">
        <div class="title-text"> Additional preferences </div>
        <div class="row">
          <div class="col-auto tags">
            Not afraid of dogs
          </div>
          <div class="col-auto tags">
            Child friendly
          </div>
          <div class="col-auto tags">
            Cheerful person
          </div>
        </div>
      </div>

      <div class="subcontent-title purple last">
        <div class="title-text"> Past Career</div>
        <div class="timeline">
          <div class="container-tl right">
            <div class="content-tl">
              <div class="career-title">Graduated from Mid School</div>
              <div class="career-subtitle">2016</div>
            </div>
          </div>
          <div class="container-tl right">
            <div class="content-tl">
              <div class="career-title">Work as Nanny in Brebes</div>
              <div class="career-subtitle">2017-2018</div>
            </div>
          </div>
          <div class="container-tl right">
            <div class="content-tl">
              <div class="career-title">Work as Housekeeper in Brebes</div>
              <div class="career-subtitle">2017-2018</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row btn-container">
        <div class="col-8 btn-wrapper">
          <button class="btn-yellow" type="button"> I WANT TO HIRE HER </button>
        </div>
      </div>

    </div>