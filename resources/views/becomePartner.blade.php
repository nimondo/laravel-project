@extends('auth')

@section('title', 'Inscription')

@section('content')
    {{-- nom 
    prenom
    nom societe
    adresse
    code postal
    ville
    telephone
    activite (dropdown)
    adresse mail
    mot de passe
    confirmation mot de passe
    acceptation cgv et cgu --}}
    {!! Form::open(['url' => '']) !!}

        {!! $errors->first('name', '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 25px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Attention!</strong> :message</div>') !!}

        {!! Form::text('lastname', null, ['class' => 'form-field', 'id' => 'lastname', 'placeholder' => 'Nom']) !!}
        <br>
        {!! Form::text('firstname', null, ['class' => 'form-field', 'id' => 'firstname', 'placeholder' => 'Prénom']) !!}
        <br>
        {!! Form::text('nameCompany', null, ['class' => 'form-field', 'id' => 'nameCompany', 'placeholder' => 'Nom de la société']) !!}
        <br>
        {!! Form::text('address', null, ['class' => 'form-field', 'id' => 'address', 'placeholder' => 'Adresse']) !!}
        <br>
        {!! Form::number('zipCode', null, ['class' => 'form-field', 'id' => 'zipCode', 'placeholder' => 'Code postal']) !!}
        <br>
        {!! Form::text('city', null, ['class' => 'form-field', 'id' => 'city', 'placeholder' => 'Ville']) !!}
        <br>
        {!! Form::number('phone', null, ['class' => 'form-field', 'id' => 'phone', 'placeholder' => 'Téléphone']) !!}
        <br>
        {!! Form::select('activity', array('Escalade' => 'Escalade', 'VTT' => 'VTT', 'Alpinisme' => 'Alpinisme')) !!}
        <br>
        {!! Form::email('email', null, ['class' => 'form-field', 'id' => 'email', 'placeholder' => 'Email']) !!}
        <br>
        {!! Form::password('password', ['class' => 'form-field', 'id' => 'password', 'placeholder' => 'Mot de passe']) !!}
        <br>
        {!! Form::password('confirmPassword', ['class' => 'form-field', 'id' => 'confirmPassword', 'placeholder' => 'Confirmation du mot de passe']) !!}
        <br>
        {!! Form::checkbox('accept', '1') !!}<p>Accepte les CGU et CGV</p>

        {!! Form::submit('S\'inscrire', ['class' => 'btn-alt', 'id' => 'submit-contact']) !!}
    {!! Form::close() !!}
@endsection