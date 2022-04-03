<!DOCTYPE html>
<html>
<head>
    <title>Proprietes</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('proprietes') }}">TS IMMO</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('proprietes') }}">Liste proprietes</a></li>
            <li><a href="{{ URL::to('proprietes/create') }}">Nouveau propriete</a>
        </ul>
    </nav>

    <h1>Liste des proprietes</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>superfifie(m²)</th>
            <th>etage(s)</th>
            <th>montant(FCFA)</th>
            <th>proprietaire</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($proprietes as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->superficie }}</td>
                <td>{{ $value->nombre_etages }}</td>
                <td>{{ $value->montant }}</td>
                <td>{{ $value->proprietaire->nom }}</td>

                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('proprietes/' . $value->id) }}">Show this
                        propriete</a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('proprietes/' . $value->id . '/edit') }}">Edit this
                        propriete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
