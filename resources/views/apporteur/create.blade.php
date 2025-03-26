@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.apporteur')}}">liste</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('apporteur.add')}}">Enregistrement</a></li>
                        <!-- <li class="breadcrumb-item active">Form Advanced</li> -->
                    </ol>
                </div>
                <h4 class="page-title">Enregistrer d'un apporteur</h4>
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
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="row">
                            <!-- Première colonne -->
                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label class="form-label">Code *</label>
                                    <input type="text" class="form-control" name="code" placeholder="Enter le code" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telephone *</label>
                                    <input type="text" class="form-control" name="telephone" placeholder="Enter le numero de telephone" required>
                                </div>
                            </div>

                            <!-- Deuxième colonne -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Nom *</label>
                                    <input type="text" class="form-control" name="nom" placeholder="Enter le nom" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Taux taxe *</label>
                                    <input type="text" class="form-control" name="taux_taxe" placeholder="Enter le taux taxe" required>
                                </div>
                            </div>

                            <!-- Troisième colonne -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Prenom *</label>
                                    <input type="text" class="form-control" name="prenom" placeholder="Enter le prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>


@endsection
