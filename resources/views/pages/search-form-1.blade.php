    @extends('layouts.default-no-navbar')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/form-search.css') }}" rel="stylesheet">
    @endpush
    <div class="row header">
      <div class="offset-1 col-2 vertical-middle">

        <div class="proses">
          <span id="step"></span>/3
        </div>

      </div>
      <div class="col-9 vertical-middle">
        <div class="text-wrapper">
          <div class="title"></div>
          <div class="subtitle"></div>
        </div>
      </div>
    </div>
    <div class="mx-3 flex-wrap">

    <div id="form1">

      <div class="description">
        <p class="purple">Match to our <span class="orange"> best pick </span> based on their background</p>
      </div>

    <form class="form" method="get" action="/search/result">
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
            <input type="radio" name="salary" value="young"> < 1 mio
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="salary" value="adult"> 1 - 3 mio
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="salary" value="elderly"> > 3 mio
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

        <p><img src="icon/settled.jpeg"/>Settled</p>
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

        <p><img src="icon/religion.jpeg"/>Religion</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple active">
            <input type="radio" name="religion" value="all" checked> All
          </label>
          <label class="btn input-option btn-purple">
            <input type="radio" name="religion" value="islam"> Islam
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
            <input type="radio" name="religion" value="buddist"> Buddhist
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
    
  </div>
  <div id="form2">

      <br>
      <div class="description purple">What <span class="orange">skills</span> do you want for your housekeeper?</div>
      <br>

      <input type="search" data-role="tagsinput" name="abilities" class="form-control py-0" placeholder="Use commma (,) to add multiple skills"><br>

        <div class="suggestions description purple">suggestions:<br></div>
        
        @foreach ($abilities as $ability)
        <label class="btn input-option btn-purple active text-white mt-1">
          {{ $ability->ability }}
        </label>
        @endforeach
        


      <br><br>
      <button type="button" id="step2-prev" class="btn search-step float-left m-3">previous</button>
      <button type="button" id="step2-next" class="btn search-step float-right m-3">next</button>

  </div>


  <div id="form3">

    <br>

      <div class="description">
        <p class="purple">Any additional preferences?</p>
      </div>

      <input type="search" data-role="tagsinput" name="preferences" class="form-control py-0" placeholder="Use commma (,) to add multiple preferences"><br>

        <div class="suggestions description purple">suggestions:<br></div>
        
        @foreach ($preferences as $preference)
        <label class="btn input-option btn-purple active text-white mt-1">
          {{ $preference->preference }}
        </label>
        @endforeach

      <br>
    <button type="button" id="step3-prev" class="btn search-step float-left m-3">previous</button>
    <button type="submit" class="btn search-step float-right m-3">search</button>

  </div>
  </div>
  </form>
  <script type="text/javascript" src="{{ URL::asset ('js/findHousekeeper.js') }}"></script>
  @endsection
    
