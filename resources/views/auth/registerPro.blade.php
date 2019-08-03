@extends('layouts.app')

@section('content')
<!--  Main Wrap  -->
<div id="content">
        <div class="content-image">

        </div>
        <div class="h-100">
            <div class="content-form">
                <!--  Input Form  -->
                <div class="col-md-6 col-sm-10 padding-leftright-null">
                    <div class="text padding-onlybottom-sm padding-md-top-null">
                        <form id="contact-form" class="padding-onlytop-md padding-md-topbottom-null">
                            @csrf
                            <h3 class="text-center">Dolomia</h3>
                            <p class="text-center">Complétez le formulaire pour devenir partenaire.</p>
                            @error('lastname')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('firstname')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('nameSociete')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('adress')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('codePostal')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('ville')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('telephone')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('activite')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('email')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('password')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('confirmPassword')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            @error('accept')
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Attention!</strong> {{ $message }}
                            </div>
                            @enderror
                            <div class="row padding-onlytop-sm">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-field" name="lastname" id="lastname" type="text" placeholder="Nom" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-field" name="firstname" id="firstname" type="text" placeholder="Prénom" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-field" type="text" name="nameSociete" id="nameSociete" placeholder="Nom de société" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-field" type="text" name="adress" id="adress" placeholder="Adresse" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-field" type="text" name="codePostal" id="codePostal" placeholder="Code postal" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-field" type="text" name="ville" id="ville" placeholder="Ville" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-field" type="text" name="telephone" id="telephone" placeholder="Téléphone" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 content-select">
                                    <label>
                                      <select name="activite" id="activite" required>
                                        <option selected="selected">Activité
                                          <label><i class="fa fa-chevron-down"></i>
                                          </label>
                                        </option>
                                        <option>Datum <i class="fa fa-chevron-down"></i>
                                        </option>
                                      </select>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-field" name="email" id="email" type="email" placeholder="Adresse mail" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-field" name="password" id="password" type="password" placeholder="Mot de passe" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input class="form-field" name="confirmPassword" id="confirmPassword" type="password" placeholder="Confirmation du mot de passe" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="accept" id="accept" {{ old('accept') ? 'checked' : '' }}>
                                            <span class="cr"><i class="cr-icon ion-checkmark"></i></span>
                                            J'accepte les CCU
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="submit-area padding-onlytop-sm text-center">
                                        <input type="submit" id="submit-contact" class="btn-alt active" value="Inscription">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center padding-onlytop-sm">
                                    <span>Vous avez déja un compte? <a href="{{ URL('/login') }}">Connectez-vous</a></span>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
