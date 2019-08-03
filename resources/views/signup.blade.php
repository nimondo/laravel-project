@extends('auth')

@section('title', 'Inscription')

@section('content')
    {{-- nom 
    prenom
    nom utilisateur
    adresse mail
    mot de passe
    confirmation mot de passe
    accepte CGU --}}
    {!! Form::open(['url' => 'signup']) !!}

        {!! $errors->first('name', '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 25px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Attention!</strong> :message</div>') !!}

        {!! Form::text('lastname', null, ['class' => 'form-field', 'id' => 'lastname', 'placeholder' => 'Nom']) !!}
        <br>
        {!! Form::text('firstname', null, ['class' => 'form-field', 'id' => 'firstname', 'placeholder' => 'Prénom']) !!}
        <br>
        {!! Form::text('username', null, ['class' => 'form-field', 'id' => 'username', 'placeholder' => 'Nom d\'utilisateur']) !!}
        <br>
        {!! Form::email('email', null, ['class' => 'form-field', 'id' => 'email', 'placeholder' => 'Email']) !!}
        <br>
        {!! Form::password('password', ['class' => 'form-field', 'id' => 'password', 'placeholder' => 'Mot de passe']) !!}
        <br>
        {!! Form::password('confirmPassword', ['class' => 'form-field', 'id' => 'confirmPassword', 'placeholder' => 'Confirmation du mot de passe']) !!}
        <br>
        {!! Form::checkbox('accept', '1') !!}<p>Accepte les CGU</p>

        {!! Form::submit('S\'inscrire', ['class' => 'btn-alt', 'id' => 'submit-contact']) !!}
    {!! Form::close() !!}
@endsection