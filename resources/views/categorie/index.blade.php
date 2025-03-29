@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.categorie')}}">Liste</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des categories</h4>
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
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Libelle</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data->code }}</td>
                                <td>{{ $data->libelle }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
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
                <form id="categorie-form">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <!-- <div class="mb-3">
                                <label for="code" class="form-label">Code *</label>
                                <input type="text" id="code" name="code" class="form-control" placeholder="Entrez une valeur">
                            </div> -->
                            <div class="mb-3">
                                <label for="libelle" class="form-label">Libelle *</label>
                                <input type="text" id="libelle" name="libelle" class="form-control" placeholder="Entrez une valeur">
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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('#categorie-form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('categorie.store') }}",
                type: "POST",
                contentType: false,
                processData: false,
                data: formData,
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        $('#categorie-form')[0].reset();
                        $('#standard-modal').modal('hide');
                        setTimeout(function() {
                            window.location.href = '/categorie/nouveau';
                        }, 1500);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr) {
                    console.log("Erreur AJAX : ", xhr.responseText);
                    var errors = xhr.responseJSON;
                    if (errors && errors.message) {
                        toastr.error(errors.message);
                    } else {
                        toastr.error("Une erreur est survenue, veuillez réessayer.");
                    }
                }
            });
        });
    });
</script>
@endsection
