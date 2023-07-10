<style>
    .apropos {
        display: flex;
        justify-content: start;
        align-items: center;
        flex-direction: column;
        gap: 1rem;
        padding: 2rem;
        background: rgb(244, 244, 244);
        border-radius: 5px;
    }

    .field {
        width: 70%;
        color: rgb(114, 114, 114);
    }

    .field span {
        color: rgb(47, 47, 47);
        font-weight: 700;
        padding-right: 3rem;
    }
</style>
<main>
  <div class="container">
    <section class="section">
    </br>
      <div class="container">
            <div class="card mb-12" style="margin-top: 50px;">
              <div class="card-body">
                <div class="pt-12 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Profil Utilisateur</h5>
                </div> 
                </br>
                <div style="text-align:left;margin-left:40%;">
                <div class="field">
                    <span> Nom d'utilisateur : </span> anarana
                </div> 
                </br>
                <div class="field">
                    <span> Contact : </span> contact
                </div> 
                </br>
                <div class="field">
                    <span> Adresse : </span> adresse
                </div> 
                </br>
                <div class="field">
                    <span> Date de naissance : </span> date
                </div> 
                </br>
                <div class="field">
                    <span> Poids : </span> 50 kg
                </div> 
                </br>
                <div class="field">
                    <span> Taille : </span> 150 cm
                </div> 
                </br>
                  <div class="col-12">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal"
                    class="btn btn-success rounded-pill mb-6"><i class="bi bi-plus-circle-fill"></i>
                    Régime actuel </button>
                  </div>
                </div>
                <!-- Basic Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Régime encours </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="pt-8">
                                    <h5 class="card-title text-center pb-0 fs-4">Nom Regime</h5>
                                </div>          
        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-dismiss="modal">Exporter PDF</button>
                            </div>
                        </div>
                    </div>
                </div><!-- End Basic Modal-->

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->