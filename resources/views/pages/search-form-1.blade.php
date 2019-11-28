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
    <div class="container mx-3 flex-wrap">
      <div class="description">
        <p class="purple">Match to our <span class="orange"> best pick </span> based on their background</p>
      </div>

      <form class="form">
        <label><img src="icon/age.jpeg"/> Age</label><br/>
        <div class="choices">
          <input type="radio" name="settled" value="1" > Yes
          <input type="radio" name="settled" value="0" > No
          <input type="radio" name="settled" value="-1"> Not Important
        </div>
        <label><img src="icon/salary.jpeg"/>Salary</label><br/>
        <div class="choices">
          <input type="radio" name="settled" value="1" > Yes
          <input type="radio" name="settled" value="0" > No
          <input type="radio" name="settled" value="-1"> Not Important
        </div>
        <label><img src="icon/married.jpeg"/>Marital State</label><br/>
        <div class="choices">
          <input type="radio" name="settled" value="1" > Yes
          <input type="radio" name="settled" value="0" > No
          <input type="radio" name="settled" value="-1"> Not Important
        </div>
        <label><img src="icon/settled.jpeg"/>Setted</label><br/>
        <div class="choices">
          <input type="radio" name="settled" value="1" > Yes
          <input type="radio" name="settled" value="0" > No
          <input type="radio" name="settled" value="-1"> Not Important
        </div>
        <label><img src="icon/religion.jpeg"/>Religion</label><br/>
        <div class="choices">
          <input type="radio" name="settled" value="1" > Yes
          <input type="radio" name="settled" value="0" > No
          <input type="radio" name="settled" value="-1"> Not Important
        </div>
        <label><img src="icon/experience.jpeg"/>Experience</label><br/>
        <div class="choices">
          <input type="radio" name="settled" value="1" > Yes
          <input type="radio" name="settled" value="0" > No
          <input type="radio" name="settled" value="-1"> Not Important
        </div>
      </form>
    </div>