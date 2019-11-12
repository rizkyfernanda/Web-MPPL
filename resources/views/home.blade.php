@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <br>
        <button onclick="window.location.href = '/check-identity';">check identity</button>
        <button>find housekeeper</button><br><br>
        <button>promo</button><br><br>
        
        <h3>Saved Profile</h3>
        <h3>Recently Viewed</h3>

        <button>View Maid</button>
</div>
@stop
