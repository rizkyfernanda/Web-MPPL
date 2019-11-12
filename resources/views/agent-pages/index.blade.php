    @extends('layouts.default-login')
    @section('content')
        <br>
        <h3>agent dashboard</h3>
        <br>
        <button onclick="window.location.href = '/agent/view-users';">View Users</button><br><br>
        <button onclick="window.location.href = '/agent/view-maids';">View Maids</button><br><br>
    @stop