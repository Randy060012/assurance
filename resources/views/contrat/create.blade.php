@extends('layouts.home')
@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.contrat')}}">liste</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('index.create')}}">Enregistrement</a></li>
                        <!-- <li class="breadcrumb-item active">Form Advanced</li> -->
                    </ol>
                </div>
                <h4 class="page-title">Enregistrer un contrat</h4>
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
                                    <label class="form-label">Code Client</label>
                                    <div class="input-group">
                                        <input type="text" id="selecteClient" class="form-control" placeholder="Enter client code" disabled>
                                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#standard-modal">...</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Prenom assurer *</label>
                                    <input type="text" class="form-control" name="prenom_assurer" placeholder="Enter insured person's last name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Immatriculation *</label>
                                    <input type="text" class="form-control" name="immatriculation" placeholder="Enter registration number" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Apporteur *</label>
                                    <input type="text" class="form-control" name="apporteur_id" placeholder="Enter broker name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Prime nette *</label>
                                    <input type="text" class="form-control" name="prime_nette" placeholder="Enter net premium" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date echeance *</label>
                                    <input type="date" class="form-control" name="date_echeance" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Montant total *</label>
                                    <input type="text" class="form-control" name="montant_total" placeholder="Enter total amount" required>
                                </div>
                            </div>

                            <!-- Deuxième colonne -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Police *</label>
                                    <input type="text" class="form-control" name="numero_police" placeholder="Enter insurance policy number" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Numero assurer *</label>
                                    <input type="text" class="form-control" name="tel_assurer" placeholder="Enter insured person's phone number" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Marque *</label>
                                    <input type="text" class="form-control" name="marque" placeholder="Enter la marque" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Categorie *</label>
                                    <input type="text" class="form-control" name="categorie_id" placeholder="Enter insurance category" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Commission *</label>
                                    <input type="text" class="form-control" name="commission" placeholder="Enter commission amount" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Commission payer *</label>
                                    <input type="text" class="form-control" name="commission_payer" placeholder="Enter commission payer name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Montant total payer *</label>
                                    <input type="text" class="form-control" name="montant_total_payer" placeholder="Enter total amount paid" required>
                                </div>
                            </div>

                            <!-- Troisième colonne -->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Nom assurer *</label>
                                    <input type="text" class="form-control" name="nom_assurer" placeholder="Enter insured person's first name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Numero attestation *</label>
                                    <input type="text" class="form-control" name="num_attestation" placeholder="Enter certificate number" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Periode *</label>
                                    <input type="text" class="form-control" name="periode" placeholder="Enter coverage period" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date de l'operation *</label>
                                    <input type="date" class="form-control" name="date_operation" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date effectuer *</label>
                                    <input type="date" class="form-control" name="date_effetuer" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date commission payer *</label>
                                    <input type="date" class="form-control" name="date_commission_payer" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Statut *</label>
                                    <select class="form-control" name="statut" required>
                                        <option value="">Sélectionnez un statut</option>
                                        <option value="approuvee">Approuvée</option>
                                        <option value="non_approuvee">Non approuvée</option>
                                    </select>
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

<!-- Modal -->
<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Rechercher une date</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Barre de recherche -->
                <input type="text" id="searchInput" class="form-control mb-3" placeholder="Rechercher une date...">

                <!-- Liste des résultats -->
                <ul class="list-group" id="dateList">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        01/04/2025
                        <button class="btn btn-primary btn-sm select-date">Sélectionner</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        15/05/2025
                        <button class="btn btn-primary btn-sm select-date">Sélectionner</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        20/06/2025
                        <button class="btn btn-primary btn-sm select-date">Sélectionner</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        30/07/2025
                        <button class="btn btn-primary btn-sm select-date">Sélectionner</button>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript pour filtrer la recherche -->
<script>
    document.getElementById("searchInput").addEventListener("input", function() {
        let filter = this.value.toLowerCase();
        let items = document.querySelectorAll("#dateList li");

        items.forEach(function(item) {
            let text = item.textContent.toLowerCase();
            item.style.display = text.includes(filter) ? "" : "none";
        });
    });

    // Utilisation de Event Delegation pour s'assurer que les boutons sont bien pris en compte
    document.getElementById("dateList").addEventListener("click", function(event) {
        if (event.target.classList.contains("select-date")) {
            let selecteClient = event.target.parentElement.firstChild.textContent.trim();
            document.getElementById("selecteClient").value = selecteClient;

            var modalElement = document.getElementById('standard-modal');
            var modal = bootstrap.Modal.getInstance(modalElement);
            modal.hide();
        }
    });
</script>

@endsection
