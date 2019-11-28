    @extends('layouts.default-no-navbar')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/form-search.css') }}" rel="stylesheet">
    @endpush
    <div class="row header">
      <div class="offset-1 col-2 vertical-middle">
        <div class="proses"> 1/3</div>
      </div>
      <div class="col-9 vertical-middle">
        <div class="text-wrapper">
          <div class="title"> Basic Detail </div>
          <div class="subtitle"> Next: Skill</div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="description">
        <p class="purple">Match to out <span class="orange"> best pick </span> based on their background</p>
      </div>

      <form class="form">
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
      </form>
    </div>