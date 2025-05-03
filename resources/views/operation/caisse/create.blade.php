@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.depense')}}">liste</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('depense.add')}}">Enregistrement</a></li>
                        <!-- <li class="breadcrumb-item active">Form Advanced</li> -->
                    </ol>
                </div>
                <h4 class="page-title">Enregistrer une dépense</h4>
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
                <form action="{{ route('depense.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Première colonne -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Type de dépenses *</label>
                                    <select class="form-control" name="type_depense_id" required>
                                        <option value="">Sélectionnez un type</option>
                                        @foreach ($type_depenses as $data)
                                        <option value="{{ $data->id }}">{{ $data->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Libelle *</label>
                                    <input type="text" class="form-control" name="libelle" placeholder="Enter le libelle" required>
                                </div>
                            </div>

                            <!-- Deuxième colonne -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Montant *</label>
                                    <input type="number" class="form-control" name="montant" placeholder="Enter le montant" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description *</label>
                                    <input type="text" class="form-control" name="description" placeholder="Enter la description" required>
                                </div>
                            </div>

                            <!-- Troisième colonne -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date *</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                            </div>
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
