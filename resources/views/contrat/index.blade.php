@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.contrat')}}">Liste</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('index.create')}}">Enregistrement</a></li>
                        <!-- <li class="breadcrumb-item active">Data Tables</li> -->
                    </ol>
                </div>
                <h4 class="page-title">Liste des contrats</h4>
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
                        <a href="{{ route('index.create')}}" type="button" class="btn btn-primary">Creation</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Police</th>
                                <th>Nom assurer</th>
                                <th>Date opration</th>
                                <th>Date d'echeance</th>
                                <th>Prime nette</th>
                                <th>Montant payer</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" ><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" ><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" ><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" ><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" ><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <!-- Répète pour les autres lignes -->
                        </tbody>

                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

</div>

@endsection
