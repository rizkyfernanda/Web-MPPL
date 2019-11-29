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
      <a onclick="window.location.href='/'"><i class="fas fa-chevron-left fa-lg"></i></a>
      </div>
      <div class="offset-3 col-6 title-main">
        Housekeeper result
      </div>
    </div>
    <div class="container-fluid overlay" onclick="hideOverlay()">
      
    </div>
    <div class="container-fluid popup">
    <div class="container">
        <div class="row edit-form">
          <div class="col-12">
            <div class="edit-title purple">Basic Detail</div>
            <form class="form" method="get" action="/search/result">
            <div class="form1">

              <p><img src="../icon/age.jpeg"/> Age</p>
              <div class="choices btn-group-toggle" data-toggle="buttons">
                <label class="btn input-option btn-purple {{ ($request->age == 'all') ? 'active' : '' }}">
                  <input type="radio" name="age" value="all" {{ ($request->age == 'all') ? 'checked' : '' }} > All
                </label>
                <label class="btn input-option btn-purple {{ ($request->age == 'young') ? 'active' : '' }}">
                  <input type="radio" name="age" value="young" {{ ($request->age == 'young') ? 'checked' : '' }}> Young
                </label>
                <label class="btn input-option btn-purple {{ ($request->age == 'adult') ? 'active' : '' }}">
                  <input type="radio" name="age" value="adult" {{ ($request->age == 'adult') ? 'checked' : '' }}> Adult
                </label>
                <label class="btn input-option btn-purple {{ ($request->age == 'elderly') ? 'active' : '' }}">
                  <input type="radio" name="age" value="elderly" {{ ($request->age == 'elderly') ? 'checked' : '' }}> Elderly
                </label>
              </div>
            </div>
            <p><img src="../icon/salary.jpeg"/>Salary</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple {{ ($request->salary == 'all') ? 'active' : '' }}">
            <input type="radio" name="salary" value="all" {{ ($request->salary == 'all') ? 'checked' : '' }}> All
          </label>
          <label class="btn input-option btn-purple {{ ($request->salary == 'low') ? 'active' : '' }}">
            <input type="radio" name="salary" value="low" {{ ($request->salary == 'low') ? 'checked' : '' }}> < 1 mio
          </label>
          <label class="btn input-option btn-purple {{ ($request->salary == 'medium') ? 'active' : '' }}">
            <input type="radio" name="salary" value="medium" {{ ($request->salary == 'medium') ? 'checked' : '' }}> 1 - 3 mio
          </label>
          <label class="btn input-option btn-purple {{ ($request->salary == 'high') ? 'active' : '' }}">
            <input type="radio" name="salary" value="high" {{ ($request->salary == 'high') ? 'checked' : '' }}> > 3 mio
          </label>
        </div>

        <p><img src="../icon/married.jpeg"/>Marital State</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple {{ ($request->married == 'all') ? 'active' : '' }}">
            <input type="radio" name="married" value="all" {{ ($request->married == 'all') ? 'checked' : '' }}> All
          </label>
          <label class="btn input-option btn-purple {{ ($request->married == 'yes') ? 'active' : '' }}">
            <input type="radio" name="married" value="yes" {{ ($request->married == 'yes') ? 'checked' : '' }}>Married
          </label>
          <label class="btn input-option btn-purple {{ ($request->married == 'no') ? 'active' : '' }}">
            <input type="radio" name="married" value="no" {{ ($request->married == 'no') ? 'checked' : '' }}> Not Married
          </label>
        </div>

        <p><img src="../icon/settled.jpeg"/>Setted</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple {{ ($request->settled == 'all') ? 'active' : '' }}">
            <input type="radio" name="settled" value="all" {{ ($request->settled == 'all') ? 'checked' : '' }}> All
          </label>
          <label class="btn input-option btn-purple {{ ($request->settled == 'yes') ? 'active' : '' }}">
            <input type="radio" name="settled" value="yes" {{ ($request->settled == 'yes') ? 'checked' : '' }}> Settle
          </label>
          <label class="btn input-option btn-purple {{ ($request->settled == 'no') ? 'active' : '' }}">
            <input type="radio" name="settled" value="no" {{ ($request->settled == 'no') ? 'checked' : '' }}> Do Not Settle
          </label>
        </div>

        <p><img src="../icon/religion.jpeg"/>Religion</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple {{ ($request->religion == 'all') ? 'active' : '' }}">
            <input type="radio" name="religion" value="all" {{ ($request->religion == 'all') ? 'checked' : '' }}> All
          </label>
          <label class="btn input-option btn-purple {{ ($request->religion == 'islam') ? 'active' : '' }}">
            <input type="radio" name="religion" value="islam" {{ ($request->religion == 'islam') ? 'checked' : '' }}> Islam
          </label>
          <label class="btn input-option btn-purple {{ ($request->religion == 'christian') ? 'active' : '' }}">
            <input type="radio" name="religion" value="christian" {{ ($request->religion == 'christian') ? 'checked' : '' }}> Christian
          </label>
          <label class="boundary btn input-option btn-purple {{ ($request->religion == 'hinduism') ? 'active' : '' }}">
            <input type="radio" name="religion" value="hinduism" {{ ($request->religion == 'hinduism') ? 'checked' : '' }}> Hinduism
          </label>
          <label class="boundary btn input-option btn-purple {{ ($request->religion == 'konguchu') ? 'active' : '' }}">
            <input type="radio" name="religion" value="konguchu" {{ ($request->religion == 'konguchu') ? 'checked' : '' }}> Konguchu
          </label>
          <label class="boundary btn input-option btn-purple {{ ($request->religion == 'buddhist') ? 'active' : '' }}">
            <input type="radio" name="religion" value="buddhist" {{ ($request->religion == 'buddhist') ? 'checked' : '' }}> Buddhist
          </label>
          </div>
        
        <p><img src="../icon/experience.jpeg"/>Experience</p>
        <div class="choices btn-group-toggle" data-toggle="buttons">
          <label class="btn input-option btn-purple {{ ($request->exp == 'all') ? 'active' : '' }}">
            <input type="radio" name="exp" value="all" {{ ($request->exp == 'all') ? 'checked' : '' }}> All
          </label>
          <label class="btn input-option btn-purple {{ ($request->exp == 'newbie') ? 'active' : '' }}">
            <input type="radio" name="exp" value="newbie" {{ ($request->exp == 'newbie') ? 'checked' : '' }}> < 1 year
          </label>
          <label class="btn input-option btn-purple {{ ($request->exp == 'mediocre') ? 'active' : '' }}">
            <input type="radio" name="exp" value="mediocre" {{ ($request->exp == 'mediocre') ? 'checked' : '' }}> 1 - 3 year
          </label>
          <label class="boundary btn input-option btn-purple {{ ($request->exp == 'expert') ? 'active' : '' }}">
            <input type="radio" name="exp" value="expert" {{ ($request->exp == 'expert') ? 'checked' : '' }}> > 3 year
          </label>
        </div>
        <div id="form2">

      <br>
      <div class="description purple">What <span class="orange">skills</span> do you want for your housekeeper?</div>
      <br>

      <input value="{{ $request->abilities }}" type="search" data-role="tagsinput" name="abilities" class="form-control py-0" placeholder="Use commma (,) to add multiple skills"><br>

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

      <input value="{{ $request->preferences }}" type="search" data-role="tagsinput" name="preferences" class="form-control py-0" placeholder="Use commma (,) to add multiple skills"><br>

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
        <button type="submit" class="btn search-step float-right m-3">search</button>

          </form>
          </div>
          
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row upper-info">
        <div class="col-3">
          <div class="count">
            {{ count($maids) }}
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
        @for ($i = 0; $i < count($maids); $i++)
        <div onclick="window.location.href='/maid-details/{{$maids[$i]->maid_id}}'" class="col-6 maids-info {{($i % 2 == 0) ? 'left' : 'right'}}">
          <img src="../image/{{$maids[$i]->picture}}"/>
          <div class="maids-detail">
            <div class="name">{{$maids[$i]->name}}</div>
            <div class="desc">{{$maids[$i]->brief_description}}</div>
          </div>          
        </div>
        @endfor
      </div>
    </div>