<!DOCTYPE html>
<html>
<head>
    <title>proprieataire App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('proprietaires') }}">TS IMMO</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('proprietaires') }}">Liste des proprietaires</a></li>
            <li><a href="{{ URL::to('proprietaires/create') }}">Nouveau proprieataire</a>

            <li><a href="{{ URL::to('proprietes') }}">Liste des proprietes</a></li>
            <li><a href="{{ URL::to('proprietes/create') }}">Nouvelle propriete</a>
        </ul>
    </nav>

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

    {{--    <div class="form-group">--}}
    {{--        {{ Form::label('proprietaire_id', 'Proprietaire') }}--}}
    {{--        <select name="proprietaire_id" required class="form-control form-select mt-3">--}}
    {{--            <option value="">Selectionner le Propretaire</option>--}}
    {{--            @foreach($proprietaires as $proprietaire)--}}
    {{--                <option--}}
    {{--                    value="{{ $proprietaire->id }}" {{$proprietaire->id === $propriete->proprietaire_id? "selected":""}}>--}}
    {{--                    {{ $proprietaire->nom }}--}}
    {{--                </option>--}}
    {{--            @endforeach--}}
    {{--        </select>--}}
    {{--    </div>--}}
    {{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>
