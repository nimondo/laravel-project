@extends('auth')

@section('title', 'Connexion')

@section('content')
    {{-- adresse mail
    mot de passe
    se souvenir de moi en checkbox
    mot de passe oublie

    connexion / inscription --}}

    {!! Form::open(['url' => 'signin']) !!}

        {!! $errors->first('name', '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 25px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Attention!</strong> :message</div>') !!}

        {!! Form::email('email', null, ['class' => 'form-field', 'id' => 'email', 'placeholder' => 'Email']) !!}
        <br>
        {!! Form::password('password', ['class' => 'form-field', 'id' => 'password', 'placeholder' => 'Mot de passe']) !!}
        <br>
        {!! Form::checkbox('remember', '1') !!}<p>Se souvenir de moi</p>

        {!! Form::submit('Se connecter', ['class' => 'btn-alt', 'id' => 'submit-contact']) !!}
    {!! Form::close() !!}
@endsection