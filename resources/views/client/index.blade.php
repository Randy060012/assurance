@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.client')}}">Liste</a></li>
                        <!-- <li class="breadcrumb-item active">Data Tables</li> -->
                    </ol>
                </div>
                <h4 class="page-title">Liste des clients</h4>
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
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#client-create-modal">Enregistrer</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($clients as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data->code }}</td>
                                <td>{{ $data->nom }}</td>
                                <td>{{ $data->prenom }}</td>
                                <td>{{ $data->telephone }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm editbtn" onclick="updateClient('{{json_encode($data)}}')"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Répète pour les autres lignes -->
                        </tbody>

                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

</div>

<!-- Modal Bootstrap -->
<div id="client-create-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="client-create-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Formulaire d'enregistrement</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('client.store') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <!-- <div class="mb-3">
                            <label for="code" class="form-label">Code *</label>
                            <input type="text" id="code" name="code" class="form-control" placeholder="Entrez une valeur">
                        </div> -->
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom *</label>
                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez une valeur">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prenom *</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrez une valeur">
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone *</label>
                            <input type="text" id="telephone" name="telephone" class="form-control" placeholder="Entrez une valeur">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Update Modal Bootstrap -->
<div id="update-client-create-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="update-client-create-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Formulaire d'enregistrement</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('client.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="row">
                        <input type="hidden" id="client_id" name="client_id" />
                        <!-- <div class="mb-3">
                            <label for="code" class="form-label">Code *</label>
                            <input type="text" id="code" name="code" class="form-control" placeholder="Entrez une valeur">
                        </div> -->
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom *</label>
                            <input type="text" id="edit_nom" name="nom" class="form-control" placeholder="Entrez une valeur">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prenom *</label>
                            <input type="text" id="edit_prenom" name="prenom" class="form-control" placeholder="Entrez une valeur">
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone *</label>
                            <input type="text" id="edit_telephone" name="telephone" class="form-control" placeholder="Entrez une valeur">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function updateClient(data) {
        let parsedData = JSON.parse(data)

        Swal.fire({
            title: 'Êtes-vous sûr de vouloir modifier ce client ?',
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
                $('#edit_nom').val(parsedData.nom);
                $('#edit_prenom').val(parsedData.prenom);
                $('#edit_telephone').val(parsedData.telephone);
                $('#client_id').val(parsedData.id);
                $('#update-client-create-modal').modal('show');
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.editbtn', function() {

            });
        });
    }
</script>
@endsection
