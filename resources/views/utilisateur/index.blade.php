@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.utilisateur')}}">Liste</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('utilisateur.add')}}">Enregistrement</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des utilisateurs</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title mb-0">Tableau</h4>
                    <div>
                        <a href="{{ route('utilisateur.add')}}" type="button" class="btn btn-primary">Creation</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100 table-sm">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Username</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($utilisateurs as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data->nom }}</td>
                                <td>{{ $data->prenom }}</td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->contact }}</td>
                                <td>
                                    <a href="{{route('utilisateur.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></a>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

</div>

@endsection
