    @extends('layouts.default')
    @section('content')

        <br>
        Get to know your potential housekeeper's career and availability in the past.
        <br><br>

        <form action="/check-identity/search" method="GET">
            <input class="form-control" type="search" name="search" placeholder="Check Identity"><br>
            <button class="btn search-step text-center float-center" type="submit" value="search">search</button>
        </form><br>

    @stop