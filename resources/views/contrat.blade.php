<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <!-- Importation de Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      <!-- Le code du header -->
    </header>

    <main>
      <div class="modal-body">
       <center> <h2>Contrat de location</h2> </center>
      
        <p>Entre {{ $contrat->client->nom }} {{ $contrat->client->prenom }}, ci-après dénommé le Client, et {{ $contrat->partenaire->nom }} {{ $contrat->partenaire->prenom }}, ci-après dénommé le Partenaire, il est convenu ce qui suit :</p>
        
        <h4>Objet de la location</h4>
        <ul>
          <li>Numéro de l'annonce : {{ $contrat->id_annonce }}</li>
          <li>Objet : {{ $contrat->annonce->objet->nom_objet }}</li>
          <li>Période de location : du {{ $contrat->annonce->date_debut }} au {{ $contrat->annonce->date_fin }} ({{ $contrat->annonce->duree }} jours)</li>
        </ul>
      
        <div class="row">
          <div class="col-md-6">
            <h4>Obligations du Client</h4>
            <p>Le Client est responsable de l'objet loué pendant la durée de la location, et s'engage à :</p>
            <ul>
              <li>Maintenir l'objet en bon état</li>
              <li>Le restituer dans les mêmes conditions qu'à la prise en charge</li>
              <li>Respecter les conditions de location spécifiées par le Partenaire, y compris les instructions d'utilisation et de sécurité pour l'objet loué</li>
            </ul>
            <h4>Validité du contrat</h4>
            <p>Le présent contrat de réservation d'objet est conclu pour une durée déterminée et prend effet à compter de la signature du Client et du Partenaire.</p>
            <p>Les signatures du Client et du Partenaire ont été apposées sur ce contrat lors de la réservation et sont valables pour l'ensemble de la période de location.</p>
           
          </div>
          <div class="col-md-6">
            <h4>Exemplaires du contrat</h4>
            <p>Le Client et le Partenaire conviennent que le présent contrat est établi en deux exemplaires originaux, chacune des parties en conservant un exemplaire.</p>
            <h4>Signatures</h4>
            <div style="display: flex;">
              <div style="flex: 1;">
                <p>Signature du Client :</p>
                <!-- <img src="{{ url('signatures/' . $contrat->signature_client) }}" alt="Signature du client" class="img-fluid"> -->
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('signatures/' . $contrat->signature_client))) }}" alt="Signature du client" class="img-fluid"> 

              </div>
              <div style="flex: 1;">
                <p>Signature du Partenaire :</p>
                <!-- <img src="{{ url('signatures/' . $contrat->signature_partenaire) }}" alt="Signature du partenaire" class="img-fluid"> -->
               <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('signatures/' . $contrat->signature_partenaire))) }}" alt="Signature du partenaire" class="img-fluid"> 
              </div>
            </div>
            
            </div>
          </div>
        </div>
       

      
        
              <!-- Modal Footer -->
              <div class="modal-footer">
                <div class="row align-items-center">
                  <div class="col-6">
                    <p>Nous vous remercions de votre confiance et espérons que vous apprécierez l'utilisation de notre service.</p>
                    <p>Fait le {{ date('d/m/Y H:i') }}</p>
                  </div>
                  <div class="col-6 d-flex justify-content-end">
                    @if (!request()->is('contrat/*/pdf'))
                    <a href="http://127.0.0.1:8000" class="btn btn-outline-secondary me-2">Retour à CollabRent</a>
                    <a href="{{ route('contrat.pdf', ['id_partenaire' => $contrat->id_partenaire, 'id_annonce' => $contrat->id_annonce]) }}" class="btn btn-outline-secondary">Télécharger en PDF</a>
                    @endif
                  </div>
                </div>
              </div>
              
              

             
        
            </div>
          </div>
        </div>
    </main>

    <footer>
      <div class="container-fluid bg-light">
        <div class="row justify-content-center align-items-center">
          <div class="col-auto">
            <p>&copy; 2023 CollabRent</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Importation de Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
