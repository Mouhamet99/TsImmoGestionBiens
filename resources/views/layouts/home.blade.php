<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@section('title','Home Page')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('style')
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
{{--            @include('layouts.navigation')--}}

<!-- Page Heading -->
    <header class="bg-white shadow">
        <nav class="navbar navbar navbar-dark bg-dark navbar-expand-lg mb-4 mt-2">
            <div class="container-fluid">
                <a class="navbar-brand " href="{{ URL::to('proprietaires') }}">TS IMMO</a>
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
                        @hasanyrole('admin|superadmin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('users/') }}">Utlisateurs</a>
                        </li>
                        @endhasanyrole
                    </ul>
                    <div class="mr-auto text-white mx-2">{{ Auth::user()->name }}</div>
                    <!-- Authentication -->
                    {{Form::open(['route'=>'logout','method' => 'POST','class'=>'d-inline mb-0'])}}
                    {{Form::submit('Deconnexion',['class'=>'btn btn-sm btn-danger'])}}
                    {{Form::close()}}
                </div>
            </div>
        </nav>

    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
