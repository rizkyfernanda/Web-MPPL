    @extends('layouts.default')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @endpush
        <div class="container">
            <div class="row">
                <div class="col-6 first-row left" onclick="window.location.href = '/check-identity';">
                    <img  src="image/ktp.jpeg"/>
                    <div class="content">
                        <strong>Check Identity</strong>
                    </div>
                </div>
                <div class="col-6 first-row right" onclick="window.location.href = '/search';">
                    <img  src="image/housekeepr.jpeg"/>
                    <div class="content">
                        <strong>Find housekeeper</strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 second-row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/{{ $promos[0]->photo }}" alt="promo">
                            </div>

                            <div class="carousel-item">
                                <img src="image/{{ $promos[1]->photo }}" alt="promo">
                            </div>

                            <div class="carousel-item">
                                <img src="image/{{ $promos[2]->photo }}" alt="promo">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row saved-profile">
                <div class="col-12">
                    <h4>Saved Profile </h4>
                <div>
                <div class="row">
                    <div class="col-4 third-row left">
                        <img src="image/{{ $saved_maid[0]->picture}}"/>
                        <div class="maids-name">{{ $saved_maid[0]->name}}</div>
                    </div>
                    <div class="col-4 third-row mid">
                        <img src="image/{{ $saved_maid[1]->picture}}"/>
                        <div class="maids-name">{{ $saved_maid[1]->name}}</div>
                    </div>
                    <div class="col-4 third-row right">
                        <img src="image/{{ $saved_maid[2]->picture}}"/>
                        <div class="maids-name">{{ $saved_maid[2]->name}}</div>
                    </div>
                </div>
            </div>

            <div class="row recently-viewed">
                <div class="col-12">
                    <h4>Recently Viewed</h4>
                <div>
                <div class="row">
                    <div class="col-4 third-row left">
                        <img src="image/{{ $recently_viewed[0]->picture }}"/>
                        <div class="maids-name">{{ $recently_viewed[0]->name}}</div>
                    </div>
                    <div class="col-4 third-row mid">
                        <img src="image/{{ $recently_viewed[1]->picture }}"/>
                        <div class="maids-name">{{ $recently_viewed[1]->name}}</div>
                    </div>
                    <div class="col-4 third-row right">
                        <img src="image/{{ $recently_viewed[2]->picture }}"/>
                        <div class="maids-name">{{ $recently_viewed[2]->name}}</div>
                    </div>
                </div>
            </div>
        </div>
    @stop