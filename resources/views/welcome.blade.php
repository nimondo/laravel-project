@extends('app')

@section('title', 'Page Title')

@section('content')
    <!--  Page Content, class footer-fixed if footer is fixed  -->
    <div id="page-content" class="header-static footer-fixed">
        <!--  Slider  -->
        <div id="flexslider-nav" class="fullpage-wrap small">
            <ul class="slides">
                <li style="background-image:url({{ URL::asset('assets/img/trip6.jpg') }})">
                    <div class="container text">
                        <h1 class="white flex-animation">It's time to <br> start your adventures</h1>
                        <h2 class="white flex-animation">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Veniam, facilis.</h2>
                        <a href="#" class="shadow btn-alt small activetwo margin-bottom-null flex-animation">More info</a>
                    </div>
                    <div class="gradient dark"></div>
                </li>
                <li style="background-image:url({{ URL::asset('assets/img/home2.jpg') }})">
                    <div class="text container">
                        <h1 class="white flex-animation no-opacity">Wild nature<br> safe adventure</h1>
                        <h2 class="white flex-animation no-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Veniam, facilis.</h2>
                        <a href="#" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity">More info</a>
                    </div>
                    <div class="gradient dark"></div>
                </li>
            </ul>
            <div class="slider-navigation">
                <a href="#" class="flex-prev"><i class="icon ion-ios-arrow-thin-left"></i></a>
                <div class="slider-controls-container"></div>
                <a href="#" class="flex-next"><i class="icon ion-ios-arrow-thin-right"></i></a>
            </div>
        </div>
        <!--  END Slider  -->
        <div id="home-wrap" class="content-section fullpage-wrap">
            <!-- Section About -->
            <div class="row margin-leftright-null">
                <div class="container">
                    <div class="col-md-12 padding-leftright-null">
                        <div class="text text-center">
                            <h2 class="margin-bottom-null title center">About Us</h2>
                            <p class="heading center grey z-index">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="padding-onlytop-md">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic reprehenderit eligendi dolor incidunt natus commodi doloribus culpa ad iusto suscipit dolores, ex obcaecati molestias, nulla consectetur dolore quas adipisci similique eaque provident. Nostrum, officiis cum facere iure et temporibus reprehenderit, vero laudantium numquam qui odit. Dolor et inventore earum, deleniti!</p>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Section About -->
            <!-- Services -->
            <div class="row no-margin text-center grey-background">
                <div class="container">
                    <div class="col-md-12 padding-leftright-null">
                        <div class="col-md-4 padding-leftright-null">
                            <div class="text padding-md-bottom-null">
                                <i class="fas fa-mountain service margin-bottom-small"></i>
                                <h6 class="heading margin-bottom-extrasmall">In every conditions</h6>
                                <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                            </div>
                        </div>
                        <div class="col-md-4 padding-leftright-null">
                            <div class="text padding-md-bottom-null">
                                <i class="fa fa-tree service margin-bottom-small"></i>
                                <h6 class="heading margin-bottom-extrasmall">Professional Team</h6>
                                <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                            </div>
                        </div>
                        <div class="col-md-4 padding-leftright-null">
                            <div class="text">
                                <i class="far fa-compass service margin-bottom-small"></i>
                                <h6 class="heading  margin-bottom-extrasmall">Expert hikers</h6>
                                <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Services -->
            <!-- Carousel Gallery -->
            <div class="row margin-leftright-null padding-sm">
                <div class="gallery-carousel">
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip5-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip6-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip7-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip8-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip9-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip10-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip11-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip12-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip2-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip8-small.jpg') }})"></div>
                    </div>
                    <div class="item">
                        <div class="image" style="background-image:url({{ URL::asset('assets/img/trip9-small.jpg') }})"></div>
                    </div>
                </div>
            </div>
            <!-- Carousel Gallery -->
            <!-- Trip Showcase  -->
            <div id="showcase-treks" class="text padding-bottom-null grey-background center">
                <div class="container">
                    <div class="col-md-12 padding-leftright-null text-center">
                        <h2 class="margin-bottom-null title line center">Featured trips</h2>
                        <p class="heading center grey margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                    <div class="col-md-12 padding-leftright-null">
                        <section class="showcase-carousel text">
                            <!--  Single Trip  -->
                            <div class="item">
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
                            <!--  END Single Trip  -->
                            <div class="item">
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
                            <div class="item">
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
                            <div class="item">
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
                        </section>
                    </div>
                </div>
            </div>
            <!--  END Trip Showcase  -->
            <!--  Section Image Background with overlay  -->
            <div class="row margin-leftright-null grey-background">
                <div class="bg-img overlay simple-parallax responsive" style="background-image:url({{ URL::asset('assets/img/testimonials.jpg') }})">
                <div class="container">
                    <!-- Testimonials -->
                    <section class="testimonials-carousel-simple col-md-12 text padding-bottom-null">
                        <div class="item padding-leftright-null">
                            <div class="padding-top-null padding-bottom-null">
                                <blockquote class="margin-bottom-small white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatum fugiat molestias, veritatis perspiciatis laborum modi beatae placeat explicabo at laudantium aliquam, nam vero ut!<em class="small grey-light">John Doe</em></blockquote>
                            </div>
                        </div>
                        <div class="item padding-leftright-null">
                            <div class="padding-top-null padding-bottom-null">
                                <blockquote class="margin-bottom-small white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatum fugiat molestias, veritatis perspiciatis laborum modi beatae placeat explicabo at laudantium aliquam, nam vero ut!<em class="small grey-light">Vanessa Brown</em></blockquote>
                            </div>
                        </div>
                    </section>
                    <!-- END Testimonials -->
                </div>
                </div>
            </div>
            <!--  END Section Image Background with overlay  -->
            <!--  Team  -->
            <div id="team">
            <div class="container text">
                <div class="row">
                    <div class="col-md-12 padding-leftright-null padding-onlybottom-md text-center">
                        <h2 class="margin-bottom-null title line center">Our fabulous team</h2>
                        <p class="heading center grey margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                    <div class="col-md-4 single-person">
                        <div class="content">
                            <img src="{{ URL::asset('assets/img/hiker1.jpg') }}" alt="">
                            <ul class="social">
                                <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-snapchat"></i></a></li>
                            </ul>
                        </div>
                        <div class="description text-center">
                            <h5>John Doe</h5>
                            <h6>Cortina, Italy</h6>
                        </div>
                    </div>
                    <div class="col-md-4 single-person">
                        <div class="content">
                            <img src="{{ URL::asset('assets/img/hiker2.jpg') }}" alt="">
                            <ul class="social">
                                <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-snapchat"></i></a></li>
                            </ul>
                        </div>
                        <div class="description text-center">
                            <h5>Jessica Simpson</h5>
                            <h6>Chamonix-Mont-Blanc, France</h6>
                        </div>
                    </div>
                    <div class="col-md-4 single-person">
                        <div class="content">
                            <img src="{{ URL::asset('assets/img/hiker3.jpg') }}" alt="">
                            <ul class="social">
                                <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-dribbble"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="icon ion-social-snapchat"></i></a></li>
                            </ul>
                        </div>
                        <div class="description text-center">
                            <h5>Robert Brown</h5>
                            <h6>Kitzbühel, Austria</h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--  END Team  -->
            <!--  Sponsor  -->
            <div class="row no-margin">
                <div class="container text">
                    <div class="col-md-12 sponsor-carousel padding-leftright-null">
                        <div class="item">
                            <img class="center" src="{{ URL::asset('assets/img/sponsor1.png') }}" alt="client logo">
                        </div>
                        <div class="item">
                            <img class="center" src="{{ URL::asset('assets/img/sponsor2.png') }}" alt="client logo">
                        </div>
                        <div class="item">
                            <img class="center" src="{{ URL::asset('assets/img/sponsor3.png') }}" alt="client logo">
                        </div>
                        <div class="item">
                            <img class="center" src="{{ URL::asset('assets/img/sponsor4.png') }}" alt="client logo">
                        </div>
                    </div>
                </div>
            </div>
            <!--  Sponsor  -->
        </div>
    </div>
    <!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection