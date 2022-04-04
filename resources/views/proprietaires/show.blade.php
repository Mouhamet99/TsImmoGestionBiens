<!DOCTYPE html>
<html>
<head>
    <title>Detail proprietaire</title>
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


    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <h1 class="text-center">Details</h1>

    <div class="jumbotron text-center">
        <h2>{{ $proprietaire->nom }}</h2>
        <p>
            <strong>Email:</strong> {{ $proprietaire->email }}<br>
            <strong>CNI:</strong> {{ $proprietaire->cni }}
            <strong>Proprietes</strong> {{ $proprietaire->proprietes->count() }}
        </p>
    </div>

</div>
</body>
</html>
