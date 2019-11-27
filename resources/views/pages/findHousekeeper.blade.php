    @extends('layouts.default')
    @section('content')

    <form action="/findHousekeeper/search" method="GET">
   	{{ csrf_field() }}

    <div id="form1">

	    <br>
	    <small>Step 1/3</small>
	    <br>
	    Choose your designated housekeeper's background
	    <br>

    	<br>Age<br>
	    <div class="btn-group btn-group-toggle" data-toggle="buttons">
		  <label class="btn btn-primary active">
		    <input type="radio" name="age" value="all" checked> any
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="age" value="young"> young
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="age" value="adult"> adult
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="age" value="elderly"> elderly
		  </label>
		</div><br>

		<br>Salary<br>
	    <div class="btn-group btn-group-toggle" data-toggle="buttons">
		  <label class="btn btn-primary active">
		    <input type="radio" name="salary" value="all" checked> any
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="salary" value="<1"> < 1 mio
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="salary" value="1-3"> 1-3 mio
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="salary" value=">3"> > 3 mio
		  </label>
		</div><br>

		<br>Marital Status<br>
	    <div class="btn-group btn-group-toggle" data-toggle="buttons">
		  <label class="btn btn-primary active">
		    <input type="radio" name="married" value="all" checked> any
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="married" value="1"> married
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="married" value="0"> not married
		  </label>
		</div><br>

		<br>Will settle at your home?<br>
	    <div class="btn-group btn-group-toggle" data-toggle="buttons">
		  <label class="btn btn-primary active">
		    <input type="radio" name="settled" value="all" checked> any
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="settled" value="1"> yes
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="settled" value="0"> no
		  </label>
		</div><br>

		<br>Religion<br>
	    <div class="btn-group btn-group-toggle" data-toggle="buttons">
		  <label class="btn btn-primary active">
		    <input type="radio" name="religion" value="all" checked> any
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="religion" value="islam"> Islam
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="religion" value="christianity"> Christianity
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="religion" value="hinduism"> Hinduism
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="religion" value="others"> others
		  </label>
		</div><br>

		<br>Experience<br>
	    <div class="btn-group btn-group-toggle flex-wrap" data-toggle="buttons">
		  <label class="btn btn-primary active">
		    <input type="radio" name="experience" value="all" checked> any
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="experience" value="<1"> < 1 year
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="experience" value="1-3"> 1-3 years
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="experience" value=">3"> > 3 years
		  </label>
		</div><br>

		<br>
		<button type="button" id="step1-next" class="btn btn-light">next</button>

	</div>

	<div id="form2">

		<br>
	    <small>Step 2/3</small>
	    <br>
	    What skills do you want for your housekeeper?
	    <br><br>

	    <input type="search" data-role="tagsinput" name="search" class="form-control py-0" placeholder="Type in any skills"><br>


	    <small>suggestions</small><br>
	    @foreach ($abilities as $ability)
	    <button type="button" class="btn badge-pill badge-primary mb-5">{{ $ability->ability }}</button>
	    @endforeach

	    <br>
		<button type="button" id="step2-prev" class="btn btn-light">previous</button>
		<button type="button" id="step2-next" class="btn btn-light">next</button>

	</div>

	<div id="form3">

		<br>
	    <small>Step 3/3</small>
	    <br>
	    Any additional preferences?
	    <br><br>

	    <input type="search" class="form-control py-0" name="search" placeholder="Type in any skills"><br>

	    <small>suggestions</small><br>
	    @foreach ($preferences as $preference)
	    <button type="button" class="btn badge-pill badge-primary mb-5">{{ $preference->preference }}</button>
	    @endforeach

	    <br>
	    <button type="button" id="step3-prev" class="btn btn-light">previous</button>
		<button type="button" id="search" class="btn btn-light">search</button>

	</div>
	</form>

	<script type="text/javascript" src="{{ asset('js/findHousekeeper.js') }}"></script>

    @stop