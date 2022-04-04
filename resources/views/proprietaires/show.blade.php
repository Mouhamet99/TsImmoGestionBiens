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
        <h2>{{ $proprietaire->nom }}</h2>
        <p>
            <strong>Email:</strong> {{ $proprietaire->email }}<br>
            <strong>CNI:</strong> {{ $proprietaire->cni }}
            <strong>Proprietes</strong> {{ $proprietaire->proprietes->count() }}
        </p>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row g-2">
            <div class="col-md-6">
                <div class="card bg-white p-3 px-4 d-flex justify-content-center">
                    <h5 class="mb-0">Standard Plan</h5> <span class="price">$19/month</span>
                    <div class="mt-4">
                        <div class="d-flex justify-content-between align-items-center"><span>All features</span> <span>1 Minute trigger</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center"><span>5000 interactions</span>
                            <span>Remove branding</span></div>
                        <div class="d-flex justify-content-between align-items-center"><span>15 bots</span> <span>Priority support</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-danger">Start Free</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex flex-column">
                        <div class="pricing-1 d-flex justify-content-between">
                            <div><span class="d-block">Add 5 bots or active flow</span> <span class="font-weight-bold">+ $10/month</span>
                            </div>
                            <div class="circle"><span></span> <span></span> <span></span> <span></span></div>
                        </div>
                        <div class="pricing-1 d-flex justify-content-between">
                            <div><span class="d-block">Add 8 bots or active flow</span> <span class="font-weight-bold">+ $20/month</span>
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
