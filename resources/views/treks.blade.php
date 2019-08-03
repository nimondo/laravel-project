@extends('app')

@section('title', 'Treks')

@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
<div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
        <ul class="slides">
            <li style="background-image:url({{ URL::asset('assets/img/trip8.jpg') }})">
                <div class="container text text-center">
                    <h1 class="white margin-bottom-small">All Treks</h1>
                    <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p>
                </div>
                <div class="gradient dark"></div>
            </li>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Treks</li>
            </ol>
        </ul>
    </div>
    <!--  END Slider  -->
    <div id="page-wrap" class="content-section fullpage-wrap grey-background">
        <div class="container text">
            <section id="masonry-filters" class="">
                <!--  Filters  -->
                <div class="row margin-null">
                    <div class="col-sm-12 padding-leftright-null text-center">
                        <ul class="col-md-12 filters padding-leftright-null">
                            <li data-filter="*" class="is-checked">All</li>
                            <li data-filter=".hiking">Hiking</li>
                            <li data-filter=".trekking">Trekking</li>
                            <li data-filter=".canyoning">Canyoning</li>
                            <li data-filter=".adventure">Adventure</li>
                        </ul>
                    </div>
                </div>
                <!--  END Filters  -->
            </section>
            <!--  All treks  -->
            <section id="showcase-treks" class="page" data-isotope="load-simple">
                <div class="masonry-items two-columns">
                    <!--  Single Trek  -->
                    <div class="item one-item trekking">
                        <div class="showcase-trek">
                            <span class="read">
                                from 820$
                            </span>
                            <img src="{{ URL::asset('assets/img/trip1.jpg') }}" alt="">
                            <div class="content text-center">
                                <div class="row margin-leftright-null">
                                    <div class="meta">
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>12</h3>
                                            <h4>Days</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>10</h3>
                                            <h4>Max Group Size</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>Hight</h3>
                                            <h4>Difficulty</h4>
                                        </div>
                                    </div>
                                    <div class="category">
                                        <h3>Trekking Expedition</h3>
                                    </div>
                                    <div class="info">
                                        <div class="col-md-12 padding-leftright-null">
                                            <h6 class="heading">Everest Base Camp</h6>
                                            <p class="margin-null">Ama Dablam, Nepal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="single-trek.html" class="link"></a>
                        </div>
                    </div>
                    <!--  END Single Trek  -->
                    <div class="item one-item hiking adventure">
                        <div class="showcase-trek">
                            <span class="read">
                                from 320$
                            </span>
                            <img src="{{ URL::asset('assets/img/trip2.jpg') }}" alt="">
                            <div class="content text-center">
                                <div class="row margin-leftright-null">
                                    <div class="meta">
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>3</h3>
                                            <h4>Days</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>10</h3>
                                            <h4>Max Group Size</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>Hight</h3>
                                            <h4>Difficulty</h4>
                                        </div>
                                    </div>
                                    <div class="category">
                                        <h3>Hiking Expedition</h3>
                                    </div>
                                    <div class="info">
                                        <div class="col-md-12 padding-leftright-null">
                                            <h6 class="heading">Monte Bianco</h6>
                                            <p class="margin-null">Courmayeur, France</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="single-trek-2.html" class="link"></a>
                        </div>
                    </div>
                    <div class="item one-item canyoning adventure">
                        <div class="showcase-trek">
                            <span class="read">
                                from 120$
                            </span>
                            <img src="{{ URL::asset('assets/img/trip3.jpg') }}" alt="">
                            <div class="content text-center">
                                <div class="row margin-leftright-null">
                                    <div class="meta">
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>1</h3>
                                            <h4>Days</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>20</h3>
                                            <h4>Max Group Size</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>Medium</h3>
                                            <h4>Difficulty</h4>
                                        </div>
                                    </div>
                                    <div class="category">
                                        <h3>Canyoning Expedition</h3>
                                    </div>
                                    <div class="info">
                                        <div class="col-md-12 padding-leftright-null">
                                            <h6 class="heading">Valley of Piave</h6>
                                            <p class="margin-null">Dolomiti, Italy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="single-trek.html" class="link"></a>
                        </div>
                    </div>
                    <div class="item one-item trekking">
                        <div class="showcase-trek">
                            <span class="read">
                                from 550$
                            </span>
                            <img src="{{ URL::asset('assets/img/trip4.jpg') }}" alt="">
                            <div class="content text-center">
                                <div class="row margin-leftright-null">
                                    <div class="meta">
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>8</h3>
                                            <h4>Days</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>5</h3>
                                            <h4>Max Group Size</h4>
                                        </div>
                                        <div class="col-md-4 padding-leftright-null">
                                            <h3>Easy</h3>
                                            <h4>Difficolty</h4>
                                        </div>
                                    </div>
                                    <div class="category">
                                        <h3>Trekking Expedition</h3>
                                    </div>
                                    <div class="info">
                                        <div class="col-md-12">
                                            <h6>Eolie Island</h6>
                                            <p class="margin-null">Eolie Island, Italy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="single-trek-2.html" class="link"></a>
                        </div>
                    </div>
                </div>
            </section>
            <!--  END All treks  -->
        </div>
        <!--  Call to Action  -->
        <div class="row margin-leftright-null color-background">
            <div class="col-md-12 text text-center">
                <h4 class="big white margin-bottom-small">Would you like more info about other trips?</h4>
                <a href="#" target="_blank" class="btn-alt small white margin-null active shadow">Contact us</a>
            </div>
        </div>
        <!--  END Call to Action  -->
    </div>
</div>
<!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection