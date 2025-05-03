@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.tdd')}}">Liste</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des types de dépenses</h4>
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
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Enregistrer</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100 table-sm">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Libelle</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($type_depenses as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data->libelle }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm editbtn" onclick="updateCategorie('{{json_encode($data)}}')"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

    <!-- Modal Bootstrap -->
    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Formulaire d'enregistrement</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('tdd.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="libelle" class="form-label">Libelle *</label>
                                <input type="text" id="libelle" name="libelle" class="form-control" placeholder="Entrez un type de depense">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-secondary" id="toastr-one">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Update Modal Bootstrap -->
    <div id="update-standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="update-standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Formulaire de modification</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('categorie.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" id="catg_id" name="catg_id" />
                            <!-- <div class="mb-3">
                                <label for="code" class="form-label">Code *</label>
                                <input type="text" id="code" name="code" class="form-control" placeholder="Entrez une valeur">
                            </div> -->
                            <div class="mb-3">
                                <label for="libelle" class="form-label">Libelle *</label>
                                <input type="text" id="edit_libelle" name="libelle" class="form-control" placeholder="Entrez une valeur">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-secondary" id="toastr-one">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function updateCategorie(data) {
        let parsedData = JSON.parse(data)

        Swal.fire({
            title: 'Êtes-vous sûr de vouloir modifier cette categorie ?',
            text: "Cette action modifiera les informations existantes.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, continuer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                console.log('clik', parsedData)
                $('#edit_libelle').val(parsedData.libelle);
                $('#catg_id').val(parsedData.id);
                $('#update-standard-modal').modal('show');
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.editbtn', function() {

            });
        });
    }
</script>
@endsection
