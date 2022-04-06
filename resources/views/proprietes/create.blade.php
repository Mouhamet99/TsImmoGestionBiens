<!DOCTYPE html>
<html>
<head>
    <title>Proprietes</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <nav class="navbar navbar navbar-dark bg-dark navbar-expand-lg mb-4 mt-2">
        <div class="container-fluid">
            <a class="navbar-brand " href="{{ URL::to('proprietes') }}">TS IMMO</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('proprietaires') }}">Liste propretaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('proprietes') }}">Liste proprietes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('proprietaires/create') }}">Nouveau propretaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('proprietes/create') }}">Nouveau propriete</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Creation d'une nouvelle propriete</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
    {{ Form::open(array('url' => 'proprietes')) }}

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
                <option value="{{ $proprietaire->id }}" {{old('proprietaire_id')=== $proprietaire->id? "selected":""}}>
                    {{ $proprietaire->nom }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('quartier_id', 'Quartier') }}
        <select class="form-select mt-3 form-control" name="quartier_id" required>
            <option selected value="">Selectionner le quartier</option>
            @foreach ($quartiers as $quarter)
                <option value="{{$quarter->id}}"  {{old('quarter_id')=== $quarter->id? "selected":""}}>
                    {{$quarter->nom}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {{ Form::label('type_propriete_id', 'Type de Proprete') }}
        <select class="form-select mt-3 form-control" name="type_propriete_id" required>
            <option selected value="">Selectionner le type de propriete</option>
            @foreach ($type_proprietes as $type)
                <option value="{{$type->id}}"  {{old('type_id')=== $type->id? "selected":""}}>
                    {{$type->libelle}}
                </option>
            @endforeach
        </select>
    </div>

    {{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>
