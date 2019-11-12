    @extends('layouts.default')
    @section('content')
        <br>
        Get to know your potential housekeeper's career and availability in the past.
        <br>
        <form action="/check-identity/search" method="GET">
            <input type="search" name="search" placeholder="Check Identity"><br>
            <button type="submit" value="search">search</button>
        </form><br>

    @stop