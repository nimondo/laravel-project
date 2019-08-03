@extends('layouts.app')

@section('content')
 <!--  Main Wrap  -->
 <div id="content">
        <div class="content-image">

        </div>
        <div class="h-100">
            <div class="content-form align-center">
                <!--  Input Form  -->
                <div class="col-md-7 col-sm-10 padding-leftright-null">
                    <div class="text padding-onlybottom-sm padding-md-top-null">
                        <form id="contact-form" class="padding-onlytop-md padding-md-topbottom-null" action="{{ route('password.email') }}">
                            @csrf
                            <h3 class="text-center">Dolomia</h3>
                            <p class="text-center">Entrez votre mail pour recevoir votre nouveau mot de passe.</p>
                            @error('email')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            <div class="row padding-onlytop-sm">
                                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                                    <input class="form-field" name="email" id="email" value="{{ old('email') }}" type="email" placeholder="Adresse mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="submit-area padding-onlytop-sm text-center">
                                        <input type="submit" id="submit-contact" class="btn-alt active" value="Envoyer">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--  END Input Form  -->
            </div>
            <div id="footer">
                <p class="m-0">© Dolomia - Tous droits réservés</p>
            </div>
        </div>
    </div>
    <!--  Main Wrap  -->



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
