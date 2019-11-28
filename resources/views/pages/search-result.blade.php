    @extends('layouts.default-no-navbar')
    @section('content')
    @push('styles')
      <link href="{{ asset('css/search-result.css') }}" rel="stylesheet">
      <link href="{{ asset('css/form-search.css') }}" rel="stylesheet">
    @endpush
    @push('scripts')
      <script src="{{ asset('js/search-form.js') }}"></script>
    @endpush
    <div class="row header">
      <div class="col-1 vertical-middle">
      <i class="fas fa-chevron-left fa-lg"></i>
      </div>
      <div class="offset-3 col-6 title-main">
        Housekeeper result
      </div>
    </div>

    <div class="container-fluid overlay" onclick="hideOverlay()">
      <div class="container">
        <div class="row edit-form">
          <div class="col-12">
            <div class="edit-title purple">Basic Detail</div>
            <form class="form">
            <div class="form1">

              <p><img src="../icon/age.jpeg"/> Age</p>
              <div class="choices btn-group-toggle" data-toggle="buttons">
                <label class="btn input-option btn-purple active">
                  <input type="radio" name="age" value="all" checked> All
                </label>
                <label class="btn input-option btn-purple">
                  <input type="radio" name="age" value="young"> Young
                </label>
                <label class="btn input-option btn-purple">
                  <input type="radio" name="age" value="adult"> Adult
                </label>
                <label class="btn input-option btn-purple">
                  <input type="radio" name="age" value="elderly"> Elderly
                </label>
              </div>
            </div>
            <p><img src="../icon/salary.jpeg"/>Salary</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="salary" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="salary" value="low"> < 1 mio
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="salary" value="medium"> 1 - 3 mio
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="salary" value="high"> > 3 mio
          </label>
        </div>

        <p><img src="../icon/married.jpeg"/>Marital State</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="married" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="married" value="yes">Married
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="married" value="no"> Not Married
          </label>
        </div>

        <p><img src="../icon/settled.jpeg"/>Setted</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="settled" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="settled" value="yes"> Settle
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="settled" value="no"> Do Not Settle
          </label>
        </div>

        <p><img src="../icon/religion.jpeg"/>Religion</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="religion" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="religion" value="moslem"> Moslem
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="religion" value="christian"> Christian
          </label>
          <label class="boundary btn input-option btn-purple">
            <input type="radio" name="religion" value="hinduism"> Hinduism
          </label>
          <label class="boundary btn input-option btn-purple">
            <input type="radio" name="religion" value="konguchu"> Konguchu
          </label>
          <label class="boundary btn input-option btn-purple">
            <input type="radio" name="religion" value="buddhist"> Buddhist
          </label>
          </div>
        
        <p><img src="../icon/experience.jpeg"/>Experience</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="salary" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="salary" value="newbie"> < 1 year
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="salary" value="mediocre"> 1 - 3 year
          </label>
          <label class="boundary btn input-option btn-purple">
            <input type="radio" name="salary" value="expert"> > 3 year
          </label>
        </div>
        <div id="form2">

      <br>
      <div class="description purple">What <span class="orange">skills</span> do you want for your housekeeper?</div>
      <br>

      <input type="search" data-role="tagsinput" name="search" class="form-control py-0" placeholder="Use commma (,) to add multiple skills"><br>

        <div class="suggestions description purple">suggestions:<br></div>
        
        @foreach ($abilities as $ability)
        <label class="btn input-option btn-purple active text-white mt-1">
          {{ $ability->ability }}
        </label>
        @endforeach
    <br/>
    <br/>
  </div>


  <div id="form3">

      <div class="description">
        <p class="purple">Any additional <span class="orange"> preferences</span>?</p>
      </div>

      <input type="search" data-role="tagsinput" name="search" class="form-control py-0" placeholder="Use commma (,) to add multiple skills"><br>

        <div class="suggestions description purple">suggestions:<br></div>
        
        @foreach ($preferences as $preference)
        <label class="btn input-option btn-purple active text-white mt-1">
          {{ $preference->preference }}
        </label>
        @endforeach
    <br/>
  </div>
  </div>
        <br/>
        <br/>
        <button type="button" class="btn search-step float-right m-3">search</button>

          </form>
          </div>
          
        </div>
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
          <button class="purple edit-button" onclick="showOverlay()" type="button">EDIT PREFERENCES</button>
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

      <!-- <div class="form-edit" data-aos="fade-up">
        <p>halo</p>
      </div> -->
    </div>