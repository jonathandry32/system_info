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
                    <span> Nom d'utilisateur : </span> <?php echo $profil['username'] ; ?>
                </div> 
                </br>
                <div class="field">
                    <span> Contact : </span> <?php echo $profil['numero'] ; ?>
                </div> 
                </br>
                <div class="field">
                    <span> Adresse : </span> <?php echo $profil['adresse'] ; ?>
                </div> 
                </br>
                <div class="field">
                    <span> Date de naissance : </span> <?php echo $profil['dtn'] ; ?>
                </div> 
                </br>
                <div class="field">
                    <span> Poids : </span> <?php echo $profil['poids'] ; ?> kg
                </div> 
                </br>
                <div class="field">
                    <span> Taille : </span> <?php echo $profil['taille'] ; ?> cm
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
                                    <h5 class="card-title text-center pb-0 fs-4"><?php
                                        $temp="0";
                                        foreach($plats as $p){
                                            $temp=$p;
                                        }
                                        echo $temp['reg'] ;
                                ?></h5>
                                </div>       
                                </br>
                                <h5 class="card-title text-center pb-0 fs-4">Plats contenus</h5>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Plat</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Categorie</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($i = 0; $i < count($plats); $i++) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $plats[$i]['plat']; ?></td>
                                                    <td><?php echo $plats[$i]['types']; ?></td>
                                                    <td><?php echo $plats[$i]['categ']; ?> </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <h5 class="card-title text-center pb-0 fs-4">Activités sportives contenues</h5>
                                    <table class="table table-striped"   id="filter">
                                        <thead>
                                            <tr>
                                                <th scope="col">Activité sportive</th>
                                                <th scope="col">Quantité</th>
                                                <th scope="col">Unité</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($i = 0; $i < count($activites); $i++) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $activites[$i]['act']; ?></td>
                                                    <td><?php echo $activites[$i]['quantite']; ?></td>
                                                    <td><?php echo $activites[$i]['unite']; ?> </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <h5 class="card-title text-center pb-0 fs-4">Prix du régime: <?php
                                     $temp="0";
                                     foreach($plats as $p){
                                            $temp=$p;
                                     }
                                     echo $temp['prix']; ?> Ar 
                                     
                                    </h5>           
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Fermer</button>
                                    <form action="<?php echo base_url('Pages/toPdf'); ?>" method="post">
                                        <button type="submit" class="btn btn-primary"
                                    data-bs-dismiss="modal" style="color:white">Exporter PDF</button>
                                    </form>
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