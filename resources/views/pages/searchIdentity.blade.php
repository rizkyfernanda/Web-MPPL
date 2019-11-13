    @extends('layouts.default')
    @section('content')
        <br>
        Get to know your potential housekeeper's career and availability in the past.
        <br>

        <form action="/check-identity/search/" method="GET">
            <input type="search" name="search" placeholder="Check Identity"><br>
            <button type="submit" value="search">search</button>
        </form><br>

        @if(count($maids) === 1)

            @foreach ($maids as $maid)
                Found!<br>
                ID: {{ $maid->maid_id }}<br>
                Name: {{ $maid->name }}<br>
                Picture: <img width="150px" src="{{ url('/pictures/'.$maid->picture) }}"><br>
            @endforeach

        @else
           Not found. Make sure you fill in the correct ID
        @endif

    @stop