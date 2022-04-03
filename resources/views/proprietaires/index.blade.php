<!DOCTYPE html>
<html>
<head>
    <title>Proprietaires</title>
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
    <h1>Liste des proprietaires</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>shark Level</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($proprietaires as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->shark_level }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the shark (uses the destroy method DESTROY /proprietaires/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the shark (uses the show method found at GET /proprietaires/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('proprietaires/' . $value->id) }}">Show this
                        shark</a>

                    <!-- edit this shark (uses the edit method found at GET /proprietaires/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('proprietaires/' . $value->id . '/edit') }}">Edit this
                        shark</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
