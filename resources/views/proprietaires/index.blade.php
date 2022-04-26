@extends('layouts.home')
@section('title','Proprieataire')

@section('content')

    <div class="container">
        <h1>Liste des proprietaires</h1>
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>CNI</th>
                <th>Tel</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($proprietaires as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->nom }}</td>
                    <td>{{ $value->prenom }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->cni }}</td>
                    <td>{{ $value->telephone }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    {{--                @hasanyrole('propriataire|admin|superadmin')--}}
                    <td class="text-center">
                        @can('proprietaire-list')
                            <a class="btn btn-sm btn-info" href="{{ URL::to('proprietaires/' . $value->id) }}">Voir</a>
                        @endcan
                        @can('proprietaire-edit')
                            <a class="btn btn-sm btn-warning"
                               href="{{ URL::to('proprietaires/' . $value->id . '/edit') }}">Editer</a>
                        @endcan
                        @can('proprietaire-delete')
                            {{Form::open(['url'=>'proprietaires/' . $value->id,'method' => 'delete','class'=>'d-inline'])}}
                            {{Form::submit('Supprimer',['class'=>'btn btn-sm btn-danger'])}}
                            {{Form::close()}}
                        @endcan
                    </td>
                    {{--                @endhasanyrole--}}
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
