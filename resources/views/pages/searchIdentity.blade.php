    @extends('layouts.default')
    @section('content')
        <br>
        Get to know your potential housekeeper's career and availability in the past.
        <br><br>

        <form action="/check-identity/search" method="GET">
            <input class="form-control" type="search" name="search" placeholder="Check Identity"><br>
            <button class="btn search-step text-center float-center" type="submit" value="search">search</button>
        </form><br>


        @if(count($maids) === 1)
            <h5 class="text-center font-weight-bold link m-0">Found!</div><br>

            @foreach ($maids as $maid)
                <div class="card mx-5 text-center float-center rounded">

                    <div class="card-body">
                        <img class="float-center mx-auto w-75" src="{{ url('/pictures/'.$maid->picture) }}">
                        <h5 class="card-title pt-2"> {{$maid->name}}</h5>
                        <div class="card-body m-0 p-0">
                            ID: {{ $maid->maid_id }}<br>
                            <a class="link" href="#"><u>Read Profile</u></a>
                        </div>
                    </div>
                    
                </div>
            @endforeach

            <br><div class="text-center mx-3">This candidate has <b class="link2"> no harmful background.</b> We recommend you to take a look into her background.</div>

        @else
           <div class="text-center">Not found. Make sure you fill in the correct ID</div><br>
        @endif

    @stop