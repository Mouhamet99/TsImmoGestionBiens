@extends('layouts.home')
@section('title','Editer proprieataire')

@section('content')

    <div class="container">
        <h1>Modification d'un proprieataire</h1>
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{Form::model($proprietaire, array('route'=>['proprietaires.update', $proprietaire->id], 'method'=>'PUT'))}}
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', old('email'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('nom', 'Prenom') }}
            {{ Form::text('nom', old('nom'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('prenom', 'Prenom') }}
            {{ Form::text('prenom', old('prenom'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('telephone', 'Telephone') }}
            {{ Form::text('telephone', old('telephone'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('cni', 'CNI') }}
            {{ Form::number('cni', old('cni'), array('class' => 'form-control', 'pattern'=> '[0-9]{10}')) }}
        </div>

        <div class="form-group">
            {{ Form::label('sexe', 'Sexe') }}
            {{ Form::select('sexe', array('0' => 'Selectionner une option', 'm' => 'Masculin', 'f' => 'Feminin'), old('sexe'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}


    </div>
@endsection

