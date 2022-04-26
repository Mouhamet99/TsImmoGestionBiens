@extends('layouts.home')
@section('title','Liste Proprietes')

@section('content')
    <div class="container">
        <h1>Liste des proprietes</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Libelle</th>
                <th>superfifie(m²)</th>
                <th>etage(s)</th>
                <th>addresse</th>
                <th>proprietaire</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($proprietes as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->nom }}</td>
                    <td>{{ $value->superficie }}</td>
                    <td>{{ $value->nombre_etages }}</td>
                    <td>{{ $value->addresse }}</td>
                    <td>{{ $value->proprietaire->nom }}</td>

                    <td class="text-center">
                        <a class="btn btn-sm btn-info" href="{{ URL::to('proprietes/' . $value->id) }}">Voir</a>
                        <a class="btn btn-sm btn-warning"
                           href="{{ URL::to('proprietes/' . $value->id . '/edit') }}">Editer</a>
                        {{Form::open(['url'=>'proprietes/' . $value->id,'method' => 'delete','class'=>'d-inline'])}}
                        {{Form::submit('Supprimer',['class'=>'btn btn-sm btn-danger'])}}
                        {{Form::close()}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
