@extends('layouts.home')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('index.create') }}">Enregistrement</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('index.contrat') }}">liste</a></li>
                        <!-- <li class="breadcrumb-item active">Form Advanced</li> -->
                    </ol>
                </div>
                <h4 class="page-title">Nouveau un contrat</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Formulaire</h4>

                </div>
                <div class="card-body">
                    <form action="#" method="POST">

                        <!-- Première colonne -->
                        <div class="row g-2">
                            <div class="col-md-3">
                                <label class="form-label">Code Client</label>
                                <div class="input-group">
                                    <input type="text" id="code" class="form-control"
                                        placeholder="Enter client code" disabled>
                                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#standard-modal">...</button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Nom assurer <font color="red">*</font></label>
                                <input type="text" class="form-control" id="nom_assurer" name="nom_assurer"
                                    placeholder="Enter insured person's first name" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Prenom assurer <font color="red">*</font></label>
                                <input type="text" class="form-control" id="prenom_assurer" name="prenom_assurer"
                                    placeholder="Enter insured person's last name" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Numero assurer <font color="red">*</font></label>
                                <input type="text" class="form-control" id="tel_assurer" name="tel_assurer"
                                    placeholder="Enter insured person's phone number" required>
                            </div>


                        </div>

                        <br>


                        <div class="row g-2">

                            <div class="col-md-3">
                                <label class="form-label">Police <font color="red">*</font></label>
                                <input type="text" class="form-control" name="numero_police"
                                    placeholder="Enter insurance policy number" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Marque <font color="red">*</font></label>
                                <input type="text" class="form-control" name="marque" placeholder="Enter la marque"
                                    required>
                            </div>


                            <div class="col-md-2">
                                <label class="form-label">Immatriculation <font color="red">*</font></label>
                                <input type="text" class="form-control" name="immatriculation"
                                    placeholder="Enter registration number" required>
                            </div>


                            <div class="col-md-2">
                                <label class="form-label">Numero attestation <font color="red">*</font></label>
                                <input type="text" class="form-control" name="num_attestation"
                                    placeholder="Enter certificate number" required>
                            </div>


                            <div class="col-md-2">
                                <label class="form-label">Numero attestation prov</label>
                                <input type="text" class="form-control" name="num_attestation"
                                    placeholder="Enter certificate number" required>
                            </div>


                        </div>

                        <br>


                        <div class="row g-2">

                            <div class="col-md-4">
                                <label class="form-label">Date de l'operation <font color="red">*</font> </label>
                                <input type="date" class="form-control" value="{{ now()->toDateString() }}"
                                    name="date_operation" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Date effectuer <font color="red">*</font></label>
                                <input type="date" class="form-control" name="date_effetuer" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Date echeance <font color="red">*</font></label>
                                <input type="date" class="form-control" name="date_echeance" required>
                            </div>

                        </div>

                        <br>

                        <div class="row g-2">

                            <div class="col-md-6">
                                <label class="form-label">Prime nette <font color="red">*</font></label>
                                <input type="number" step="0.01" class="form-control" name="prime_nette" id="primeNette" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Prime TTC</label>
                                <input type="text" class="form-control" name="montant_total" required>
                            </div>


                        </div>


                        <br>

                        <!-- Deuxième colonne -->
                        <div class="row g-2">

                            <div class="col-md-4">
                                <label class="form-label">Categorie <font color="red">*</font></label>
                                <select class="form-control" name="categorie_id" id="categorieSelect" required>
                                    <option value="">Sélectionnez une categorie</option>
                                    @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Apporteur <font color="red">*</font></label>
                                <select class="form-control" name="apporteur_id" id="apporteurSelect" required disabled>
                                    
                                </select>
                                <span id="pourcentageInput" class="form-control-plaintext fw-bold">—</span>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Commission <font color="red">*</font></label>
                                <input type="text" class="form-control" name="commission" id="commissionField" readonly>
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
<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Rechercher un client</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Barre de recherche -->
                <input type="text" id="search" class="form-control col-md-4"
                    placeholder="Rechercher un client par code/nom/telephone" onkeyup="recherche()">

                <!-- Liste des résultats -->
                <ul class="list-group" id="results">


                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" id="closeModalButton" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript pour filtrer la recherche -->
@endsection
@section('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    function recherche() {
        var searchValue = document.getElementById('search').value;

        // Vérifie si le champ de recherche n'est pas vide
        if (searchValue.trim() === "") {
            toastr.error("Veuillez entrer un critère de recherche.");
            let resultsDiv = document.getElementById("results");
            resultsDiv.innerHTML = "";
            return; // Empêche l'envoi de la requête si la recherche est vide
        }

        $.ajax({
            url: "{{ route('index.client.recherche') }}",
            type: "POST",
            data: {
                search: searchValue
            },
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    console.log(response);
                    let resultsDiv = document.getElementById("results");
                    resultsDiv.innerHTML = ""; // Clear previous results
                    response.clients.forEach(client => {
                        resultsDiv.innerHTML += `
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ${client.nom} | ${client.prenom} | ${client.telephone}
                        <button onclick="getClientData('${client.code}','${client.nom}', '${client.prenom}', '${client.telephone}')" class="btn btn-primary btn-sm select-date">Sélectionner</button>
                    </li>
                    `;
                    });
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
    }



    function getClientData(code, nom, prenom, telephone) {
        document.getElementById('code').value = code,
            document.getElementById('nom_assurer').value = nom,
            document.getElementById('prenom_assurer').value = prenom,
            document.getElementById('tel_assurer').value = telephone

        document.getElementById('closeModalButton').click();
    }

    // document.getElementById('categorieSelect').addEventListener('change', function() {
    //     let categorieId = this.value;
    //     let apporteurSelect = document.getElementById('apporteurSelect');

    //     if (!categorieId) {
    //         apporteurSelect.innerHTML = '<option value="">Sélectionnez un apporteur</option>';
    //         apporteurSelect.disabled = true;
    //         return;
    //     }

    //     fetch(`/get-apporteur/${categorieId}`)
    //         .then(res => res.json())
    //         .then(data => {
    //             apporteurSelect.innerHTML = '';

    //             if (data.id) {
    //                 apporteurSelect.innerHTML = `<option value="${data.id}">${data.nom ?? data.prenom}</option>`;
    //                 apporteurSelect.disabled = false;
    //             } else {
    //                 apporteurSelect.innerHTML = '<option value="">Aucun apporteur trouvé</option>';
    //                 apporteurSelect.disabled = true;
    //             }
    //         })
    //         .catch(err => {
    //             console.error(err);
    //             apporteurSelect.innerHTML = '<option value="">Erreur de chargement</option>';
    //             apporteurSelect.disabled = true;
    //         });
    // });

</script>


<script>
    let tauxPourcentage = 0;
    let apporteurSelectionne = false;
    const apporteurSelect = document.getElementById('apporteurSelect');
    const primeNetteInput = document.getElementById('primeNette');
    const commissionField = document.getElementById('commissionField');
    const pourcentageInput = document.getElementById('pourcentageInput');

    document.getElementById('categorieSelect').addEventListener('change', function() {
        const categorieId = this.value;
        if (!categorieId) {
            apporteurSelect.innerHTML = '<option value="">Aucun apporteur trouvé</option>';
            apporteurSelect.disabled = true;
            return; 
        }
        apporteurSelect.innerHTML =""
        fetch(`/get-apporteur/${categorieId}`)
            .then(response => response.json())
            .then(data => {
                if (Array.isArray(data) && data.length > 0) {
                    data.forEach(taux => {
                        if (taux.apporteur) {
                            let nomComplet = `${taux.apporteur.nom ?? ''} ${taux.apporteur.prenom ?? ''}`.trim();
                            apporteurSelect.innerHTML += `
                                <option value="${taux.id}" data-pourcentage="${taux.pourcentage}">
                                    ${nomComplet}
                                </option>`;
                        }
                    });

                    apporteurSelect.disabled = false;
                    tauxPourcentage = parseFloat(data.pourcentage);
                    document.getElementById('pourcentageInput').value = tauxPourcentage;
                    pourcentageInput.value = tauxPourcentage;
                    apporteurSelectionne = false;
                } else {
                    apporteurSelect.innerHTML = '<option value="">Aucun apporteur trouvé</option>';
                    apporteurSelect.disabled = true;
                    document.getElementById('pourcentageInput').value = '';
                    commissionField.value = '';
                    tauxPourcentage = 0;
                    apporteurSelectionne = false;
                }
            })
            .catch(err => {
                console.error(err);
                apporteurSelect.innerHTML = '<option value="">Erreur de chargement</option>';
                apporteurSelect.disabled = true;
                document.getElementById('pourcentageInput').value = '';
                commissionField.value = '';
                tauxPourcentage = 0;
                apporteurSelectionne = false;
            });
    });

    apporteurSelect.addEventListener('change', function() {
        if (this.value) {
            apporteurSelectionne = true;
            const primeNette = parseFloat(primeNetteInput.value);
            if (!isNaN(primeNette)) {
                calculerCommission(primeNette, tauxPourcentage);
            }
        } else {
            commissionField.value = '';
            apporteurSelectionne = false;
        }
    });

    primeNetteInput.addEventListener('input', function() {
        const primeNette = parseFloat(this.value);
        if (!isNaN(primeNette) && apporteurSelectionne && !isNaN(tauxPourcentage)) {
            calculerCommission(primeNette, tauxPourcentage);
        } else {
            commissionField.value = '';
        }
    });

    function calculerCommission(primeNette, pourcentage) {
        const commission = (primeNette * pourcentage) / 100;
        commissionField.value = commission.toFixed(2);
    }
</script>


@endsection
