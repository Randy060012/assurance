@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.apporteur')}}">Liste</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('apporteur.add')}}">Enregistrement</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des apporteurs</h4>
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
                        <a href="{{ route('apporteur.add')}}" type="button" class="btn btn-primary">Creation</a>
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
                                <th>Taux taxe</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="ri-pencil-fill"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="ri-delete-bin-fill"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

</div>

@endsection
