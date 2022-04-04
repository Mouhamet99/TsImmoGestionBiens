<!DOCTYPE html>
<html>
<head>
    <title>Modifier Propriete</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('proprietes') }}">TS IMMO</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('proprietes') }}">Liste des proprietes</a></li>
            <li><a href="{{ URL::to('proprietes/create') }}">Nouvelle propriete</a>
            <li><a href="{{ URL::to('proprietaires') }}">Liste des proprietaires</a>
            <li><a href="{{ URL::to('proprietaires/create') }}">Nouvelle propriete</a>
        </ul>
    </nav>

    <h1>Modification d'une propriete</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
    {{ Form::model($propriete, array('route' => array('proprietes.update', $propriete->id), 'method' => 'PUT')) }}
    <div class="form-group">
        {{ Form::label('nom', 'Nom') }}
        {{ Form::text('nom', old('nom'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('superficie', 'Superficie(m2)') }}
        {{ Form::number('superficie', old('superficie'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('adresse', 'Adresse') }}
        {{ Form::text('adresse', old('adresse'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('nombre_etages', 'Nombre d\'etages') }}
        {{ Form::number('nombre_etages', old('nombre_etages'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('proprietaire_id', 'Proprietaire') }}
        <select name="proprietaire_id" required class="form-control form-select mt-3">
            <option value="">Selectionner le Propretaire</option>
            @foreach($proprietaires as $proprietaire)
                <option
                    value="{{ $proprietaire->id }}" {{$proprietaire->id === $propriete->proprietaire_id? "selected":""}}>
                    {{ $proprietaire->nom }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('quartier_id', 'Quartier') }}
        <select class="form-select mt-3 form-control" name="quartier_id" required>
            <option value="">Selectionner le quartier</option>
            @foreach ($quartiers as $quarter)
                <option
                    value="{{$quarter->id}}" {{$quarter->id === $propriete->quartier_id ? "selected":""}}>{{$quarter->nom}} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {{ Form::label('type_propriete_id', 'Type de Proprete') }}
        <select class="form-select mt-3 form-control" name="type_propriete_id" required>
            <option selected value="">Selectionner le type de propriete</option>
            @foreach ($type_proprietes as $type)
                <option value="{{$type->id}}" {{$type->id === $propriete->type_propriete_id ? "selected":""}}>{{$type->libelle}} </option>
            @endforeach
        </select>
    </div>

    {{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>
