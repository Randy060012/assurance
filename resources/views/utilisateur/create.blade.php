@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.utilisateur')}}">liste</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('utilisateur.add')}}">Enregistrement</a></li>
                        <!-- <li class="breadcrumb-item active">Form Advanced</li> -->
                    </ol>
                </div>
                <h4 class="page-title">Nouveau un utilisateur</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Formulaire</h4>
                    <p class="text-muted mb-0">
                        A jQuery Plugin to make masks on form fields and HTML elements.
                    </p>
                </div>
                <form action="{{ route('utilisateur.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Première colonne -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nom *</label>
                                    <input type="text" class="form-control" name="nom" placeholder="Enter le nom" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact *</label>
                                    <input type="text" class="form-control" name="contact" placeholder="Enter le contact" required>
                                </div>
                            </div>

                            <!-- Deuxième colonne -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Prenom *</label>
                                    <input type="text" class="form-control" name="prenom" placeholder="Enter le prenom" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password *</label>
                                    <input type="text" class="form-control" name="password" placeholder="Enter le mot de passe" required>
                                </div>
                            </div>

                            <!-- Troisième colonne -->
                            <!-- <div class="col-md-4">

                            </div> -->
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>


@endsection
@section('scripts')

@endsection
