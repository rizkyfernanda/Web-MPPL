    @extends('layouts.default-no-navbar')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/form-search.css') }}" rel="stylesheet">
    @endpush
    @push('styles')
    <script src="{{ asset('js/search-form.js') }}"></script>
    @endpush
    <div class="row header">
      <div class="offset-1 col-2 vertical-middle">
        <div class="proses"> 1/3</div>
      </div>
      <div class="col-9 vertical-middle">
        <div class="text-wrapper">
          <div class="title"> Basic Details </div>
          <div class="subtitle"> Next: Skill</div>
        </div>
      </div>
    </div>
    <div class="mx-3 flex-wrap">
      <div class="description">
        <p class="purple">Match to our <span class="orange"> best pick </span> based on their background</p>
      </div>

    <form class="form">
      <div class="form1">

        <p><img src="icon/age.jpeg"/> Age</p>
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

        <p><img src="icon/salary.jpeg"/>Salary</p>
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

        <p><img src="icon/married.jpeg"/>Marital State</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="married" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="married" value="yes"> Married
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="married" value="no"> Not Married
          </label>
        </div>

        <p><img src="icon/settled.jpeg"/>Setted</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="settled" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="settled" value="yes"> Yes
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="settled" value="no"> No
          </label>
        </div>

        <p><img src="icon/religion.jpeg"/>Religion</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="religion" value="%" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="religion" value="moslem"> Moslem
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="religion" value="christian"> Christian
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="religion" value="hinduism"> Hinduism
          </label>
          <label class="boundary btn input-option btn-purple">
            <input type="radio" name="religion" value="konguchu"> Konguchu
          </label>
          <label class="boundary btn input-option btn-purple">
            <input type="radio" name="religion" value="buddhist"> Buddhist
          </label>
          </div>
        
        <p><img src="icon/experience.jpeg"/>Experience</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="exp" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="exp" value="newbie"> < 1 year
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="exp" value="mediocre"> 1 - 3 year
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="exp" value="expert"> > 3 year
          </label>
        </div>
        </div>

        <br>
        <button type="button" id="step1-next" class="btn search-step float-right mr-3">next</button>
    

  <div id="form2">

      <br>
      <br>
      <div class="description purple">What <span class="orange">skills</span> do you want for your housekeeper?</div>
      <br>

      <input type="search" data-role="tagsinput" name="search" class="form-control py-0" placeholder="Use commma (,) to add multiple skills"><br>

      <div class="m-3">

        <div class="suggestions">suggestions:<br></div>
        
        @foreach ($abilities as $ability)
        <label class="btn input-option btn-purple active text-white">
          {{ $ability->ability }}
        </label>
        @endforeach
        

      </div>

      <br>
      <button type="button" id="step2-prev" class="btn search-step float-left m-3">previous</button>
      <button type="button" id="step2-next" class="btn search-step float-right m-3">next</button>

  </div>


  <div id="form3">

    <br>
      <small>Step 3/3</small>
      <br>
      Any additional preferences?
      <br><br>

      <input type="search" class="form-control py-0" name="search" placeholder="Type in any skills"><br>
     
      <div class="m-3">

        <div class="suggestions">suggestions:<br></div>
        
        @foreach ($preferences as $preference)
        <label class="btn input-option btn-purple active text-white">
          {{ $preference->preference }}
        </label>
        @endforeach

    </div>

      <br>
    <button type="button" id="step2-prev" class="btn search-step float-left m-3">previous</button>
    <button type="button" id="step2-next" class="btn search-step float-right m-3">next</button>

  </div>
  </form>

    <script type="text/javascript" src="{{ url('js/findHousekeeper.js') }}"></script>

      </form>
    </div>