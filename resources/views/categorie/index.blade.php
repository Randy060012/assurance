@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Tables</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title mb-0">Basic Data Table</h4>
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
                            <tr>
                                <td>1</td>
                                <td>EMP001</td>
                                <td>System Architect</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>EMP002</td>
                                <td>Accountant</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>EMP003</td>
                                <td>Junior Technical Author</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>EMP001</td>
                                <td>System Architect</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>EMP001</td>
                                <td>System Architect</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>EMP001</td>
                                <td>System Architect</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
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
                    <h4 class="modal-title">Formulaire Simple</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="mb-3">
                                <label for="code" class="form-label">Code *</label>
                                <input type="text" id="code" name="code" class="form-control" placeholder="Entrez une valeur">
                            </div>
                            <div class="mb-3">
                                <label for="libelle" class="form-label">Libelle *</label>
                                <input type="text" id="libelle" name="libelle" class="form-control" placeholder="Entrez une valeur">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
