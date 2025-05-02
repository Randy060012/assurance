<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Facture Proforma - Location de Voiture</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container my-5 border rounded p-4 shadow">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4>Location Auto Express</h4>
        <p class="mb-0">45 Avenue des Champs, Lomé, Togo<br>
        Tél : +228 90 00 00 00<br>
        Email : contact@autoexpress.tg</p>
      </div>
      <div class="text-end">
        <h5>Facture Proforma</h5>
        <p><strong>N° :</strong> PF-LOC-2025-015</p>
        <p><strong>Date :</strong> 02/05/2025</p>
      </div>
    </div>

    <hr>

    <div class="row mb-4">
      <div class="col-md-6">
        <h6>Client</h6>
        <p>
          Monsieur Kossi Mensah<br>
          12 Rue Agbalépédogan, Lomé<br>
          Tél : +228 98 12 34 56<br>
          Email : mensah.kossi@email.com
        </p>
      </div>
      <div class="col-md-6 text-md-end">
        <h6>Détails de la location</h6>
        <p>
          <strong>Voiture :</strong> Toyota Corolla 2022<br>
          <strong>Période :</strong> Du 05/05/2025 au 10/05/2025<br>
          <strong>Durée :</strong> 6 jours
        </p>
      </div>
    </div>

    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>Description</th>
          <th class="text-end">Prix unitaire (€)</th>
          <th class="text-end">Quantité</th>
          <th class="text-end">Total (€)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Location Toyota Corolla</td>
          <td class="text-end">40,00</td>
          <td class="text-end">6</td>
          <td class="text-end">240,00</td>
        </tr>
        <tr>
          <td>Assurance temporaire</td>
          <td class="text-end">5,00</td>
          <td class="text-end">6</td>
          <td class="text-end">30,00</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3" class="text-end">Total HT</th>
          <th class="text-end">270,00</th>
        </tr>
        <tr>
          <th colspan="3" class="text-end">TVA (18%)</th>
          <th class="text-end">48,60</th>
        </tr>
        <tr class="table-secondary">
          <th colspan="3" class="text-end">Total TTC</th>
          <th class="text-end">318,60 €</th>
        </tr>
      </tfoot>
    </table>

    <div class="mt-4">
      <p><strong>Conditions de paiement :</strong> Paiement avant le 04/05/2025 pour valider la réservation.</p>
      <p><strong>Moyens de paiement :</strong> Mobile Money, Virement bancaire, Espèces.</p>
      <p class="text-muted fst-italic">Cette facture est une pro forma, elle ne vaut pas preuve de paiement.</p>
    </div>

    <div class="text-end mt-4">
      <p><strong>Signature et cachet de l'agence</strong></p>
      <p>_________________________</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
