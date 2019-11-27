    @extends('layouts.default')
    @section('content')
    @push('styles')
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @endpush
        <div class="container">
            <div class="row">
                <div class="col-6 first-row left" onclick="window.location.href = '/check-identity';">
                    <img  src="image/dummy.jpg"/>
                    <div class="content">
                        Check Identity
                    </div>
                </div>
                <div class="col-6 first-row right" onclick="window.location.href = '/check-identity';">
                    <img  src="image/dummy.jpg"/>
                    <div class="content">
                        Find housekeeper
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
                            <img src="image/promo1.jpeg" alt="Los Angeles">
                            </div>

                            <div class="carousel-item">
                            <img src="image/promo1.jpeg" alt="Chicago">
                            </div>

                            <div class="carousel-item">
                            <img src="image/promo1.jpeg" alt="New York">
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
                        <img src="image/maid.png"/>
                        <div class="maids-name">Maids Name</div>
                    </div>
                    <div class="col-4 third-row mid">
                        <img src="image/maid.png"/>
                        <div class="maids-name">Maids Name</div>
                    </div>
                    <div class="col-4 third-row right">
                        <img src="image/maid.png"/>
                        <div class="maids-name">Maids Name</div>
                    </div>
                </div>
            </div>

            <div class="row recently-viewed">
                <div class="col-12">
                    <h4>Recently Viewed</h4>
                <div>
                <div class="row">
                    <div class="col-4 third-row left">
                        <img src="image/maid.png"/>
                        <div class="maids-name">Maids Name</div>
                    </div>
                    <div class="col-4 third-row mid">
                        <img src="image/maid.png"/>
                        <div class="maids-name">Maids Name</div>
                    </div>
                    <div class="col-4 third-row right">
                        <img src="image/maid.png"/>
                        <div class="maids-name">Maids Name</div>
                    </div>
                </div>
            </div>
        </div>
    @stop