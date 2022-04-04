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
<style>
    body {
        background-color: #eee
    }

    .card {
        border: none;
        min-height: 300px;
        background-color: transparent
    }

    .bg-white {
        background-color: #fff
    }

    .price {
        font-size: 35px;
        color: #6a5ae7;
        font-weight: 600
    }

    .pricing-1 {
        background-color: #6f5fe8;
        height: 145px;
        width: 100%;
        margin-bottom: 10px;
        border-radius: 4px;
        padding: 15px;
        color: #fff;
        position: relative
    }

    .pricing-2 {
        background-color: #6f5fe8;
        height: 145px;
        width: 100%;
        border-radius: 4px
    }

    .circle span:nth-child(1) {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background-color: white;
        position: absolute;
        right: 4px;
        opacity: 0.3
    }

    .circle span:nth-child(2) {
        height: 70px;
        width: 70px;
        border-radius: 50%;
        background-color: white;
        position: absolute;
        right: 60px;
        top: 50px;
        opacity: 0.3
    }

    .circle span:nth-child(3) {
        height: 90px;
        width: 90px;
        border-radius: 50%;
        background-color: white;
        position: absolute;
        right: 150px;
        top: 30px;
        opacity: 0.3
    }

    .circle span:nth-child(4) {
        height: 30px;
        width: 30px;
        border-radius: 50%;
        background-color: white;
        position: absolute;
        right: 10px;
        top: 100px;
        opacity: 0.3
    }
</style>
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
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <h1 class="text-center">Details</h1>

    <div class="jumbotron text-center">
{{--        <h2>{{ $proprietaire->nom }}</h2>--}}
{{--        <p>--}}
{{--            <strong>Email:</strong> {{ $proprietaire->email }}<br>--}}
{{--            <strong>CNI:</strong> {{ $proprietaire->cni }}--}}
{{--            <strong>Proprietes</strong> {{ $proprietaire->proprietes->count() }}--}}
{{--        </p>--}}
    </div>
    <div class="container mt-5 mb-5">
        <div class="row g-2 row-cols-2">
            <div class=" p-3 px-4">
                <div class="card bg-white p-5 d-flex justify-content-center">
                    <h5 class="mb-0">Detail Propietaire</h5> <span class="price">{{$proprietaire->prenom}} {{$proprietaire->nom}}</span>
                    <div class="mt-4">

                        <div class="d-flex justify-content-between align-items-center">
                            <span>nom</span>
                            <span>{{ $proprietaire->nom }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>prenom</span>
                            <span>{{ $proprietaire->prenom }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>sexe</span>
                            <span>{{ $proprietaire->sexe }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>CNI</span>
                            <span>{{ $proprietaire->cni }}</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span>telephone</span>
                            <span>{{ $proprietaire->telephone }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Email</span>
                            <span>{{ $proprietaire->email }}</span>
                        </div>
                    </div>
{{--                    <div class="mt-4">--}}
{{--                        <a  href="" class="btn btn-danger">Contacter</a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="">
                <div class="card p-3">
                    <div class="d-flex flex-column">
                        <div class="pricing-1 bg-secondary d-flex justify-content-between">
                            <div><span class="d-block">Propriete</span> <span class="font-weight-bold">+ $10/month</span>
                            </div>
                            <div class="circle"><span></span> <span></span> <span></span> <span></span></div>
                        </div>
                        <div class="pricing-1 d-flex justify-content-between">
                            <div><span class="d-block">Propriete</span> <span class="font-weight-bold">+ $20/month</span>
                            </div>
                            <div class="circle"><span></span> <span></span> <span></span> <span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
