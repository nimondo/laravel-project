@extends('app')

@section('title', 'Contact Page')

@section('content')
<!--  Page Content, class footer-fixed if footer is fixed  -->
<div id="page-content" class="header-static footer-fixed">
    <!--  Slider  -->
    <div id="flexslider" class="fullpage-wrap small">
        <ul class="slides">
            <li style="background-image:url({{ URL::asset('assets/img/contact.jpg') }}">
                <div class="container text text-center">
                    <h1 class="white margin-bottom-small">Contact Us</h1>
                    <p class="heading white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veniam aperiam rerum quis atque, illum.</p>
                </div>
                <div class="gradient dark"></div>
            </li>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </ul>
    </div>
    <!--  END Slider  -->
    <div id="page-wrap" class="content-section fullpage-wrap">
        <div class="row margin-leftright-null">
            <div class="container">
                <!--  Contact Info  -->
                <div class="col-md-6 padding-leftright-null">
                    <div class="text">
                        <h2 class="margin-bottom-null title line left">Get in touch Person</h2>
                        <p class="heading center grey margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <div class="padding-onlytop-md">
                            <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                            <p><span class="contact-info">Address <em>322 Moon St, Venice
                                Italy, 1231</em></span><br><span class="contact-info">Phone <em>0039 12345 6789</em></span><br><span class="contact-info">Email <a href="#"><em>hello@matelick.com</em></a></span></p>
                            <p class="margin-md-bottom-null"><span class="contact-info">Monday to Friday <em>9.00 am to 12.00 pm</em></span><br><span class="contact-info">Saturday from <em>9.00 am to 12.00 pm</em></span></p>
                        </div>
                    </div>
                </div>
                <!--  END Contact Info -->
                <!--  Input Form  -->
                <div class="col-md-6 padding-leftright-null">
                    <div class="text padding-onlybottom-sm padding-md-top-null">
                        {!! Form::open(['url' => 'contact', 'id' => 'contact-form', 'class' => 'padding-onlytop-md padding-md-topbottom-null']) !!}
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::text('name', null, ['class' => 'form-field', 'id' => 'name', 'placeholder' => 'Nom']) !!}
                                </div>
                                <div class="col-md-12">
                                    {!! Form::email('email', null, ['class' => 'form-field', 'id' => 'email', 'placeholder' => 'Email']) !!}
                                </div>
                                <div class="col-md-12">
                                    {!! Form::text('sujet', null, ['class' => 'form-field', 'id' => 'sujet', 'placeholder' => 'Sujet']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::textarea('bodyMessage', null, ['class' => 'form-field', 'id' => 'bodyMessage', 'rows' => '6', 'placeholder' => 'Votre message']) !!}
                                    <div class="submit-area padding-onlytop-sm">
                                        {!! Form::submit('Envoyer', ['class' => 'btn-alt', 'id' => 'submit-contact']) !!}

                                        {!! $errors->first('name', '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 25px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <strong>Attention!</strong> :message</div>') !!}

                                        {!! $errors->first('email', '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 25px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <strong>Attention!</strong> :message</div>') !!}

                                        {!! $errors->first('sujet', '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 25px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <strong>Attention!</strong> :message</div>') !!}

                                        {!! $errors->first('message', '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 25px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <strong>Attention!</strong> :message</div>') !!}

                                        @if(Session::has('success'))
                                        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 25px;">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <strong>Félicitations!</strong> {{ Session::get('message') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!--  END Input Form  -->
            </div>
        </div>
    </div>
</div>
<!--  END Page Content, class footer-fixed if footer is fixed  -->
@endsection