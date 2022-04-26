@extends('layouts.home')
@section('title','Nouveau proprieataire')

@section('content')
    <div class="container">
        <h1>Creation d'un nouveau proprieataire</h1>
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}
        {{ Form::open(array('url' => 'proprietaires')) }}
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', old('email'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('nom', 'Nom') }}
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
        {{--    <p>Contrat</p>--}}
        <hr>

        <div class="form-group">
            {{ Form::label('type_contrat_id', 'contrat') }}
            <select class="form-select mt-3 form-control" name="type_contrat_id" required>
                <option value="">Selectionner le type de contrat</option>
                @foreach ($type_contrats as $type)
                    <option value="{{$type->id}}" {{old('type_id')=== $type->id? "selected":""}}>
                        {{$type->libelle}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('date_debut', 'debut contrat') }}
            {{ Form::date('date_debut', old('date_debut'), array('class' => 'form-control', )) }}
        </div>
        <div class="form-group">
            {{ Form::hidden('proprietaire_id', old('proprietaire_id'), array('class' => 'form-control', )) }}
        </div>
        <div class="form-group">
            {{ Form::label('duree', 'duree contrat (mois)') }}
            {{ Form::number('duree', old('duree'), array('class' => 'form-control','pattern'=>'[0-9]{10}', 'min'=>0)) }}
        </div>

        {{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
@endsection
