    @extends('layouts.default')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @endpush
 		<br><br>
    	<h3 class="text-center">Dashboard</h3>
    	<br><br>

        <div class="row">
                <div class="col-12 first-row" onclick="window.location.href = '/agent/view-users';">
                    <img  src="image/ktp.jpeg"/>
                    <div class="content">
                        <strong>View Users</strong>
                    </div>
                </div>
                <div class="col-12 first-row" onclick="window.location.href = '/agent/view-maids';">
                    <img  src="image/housekeepr.jpeg"/>
                    <div class="content">
                        <strong>View Maids</strong>
                    </div>
                </div>
            </div>
    @stop