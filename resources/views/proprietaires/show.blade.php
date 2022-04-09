@extends('layouts.home')
@section('title','Detail proprieataire')
@section('style')
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

@endsection
@section('content')

    <div class="container">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <h1 class="text-center">Details</h1>

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
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Adresse</span>
                            <span>{{ $proprietaire->adresse }}</span>
                        </div>
                    </div>
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

@endsection


