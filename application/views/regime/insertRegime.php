<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<body>
    <div class="cont">
        <center><h2>Inserer un nouveau régime</h2></center>
        <br>
        <form class="row g-3 needs-validation" action="<?php echo base_url('Regime/insertRegime');?>" method="POST" novalidate>
            <div class="row mb-3">
                <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                    <input type="text" name="nom" class="form-control" id="nom" required>
                    <div class="invalid-feedback">Nom obligatoire!</div>
                </div>
            </div>           
            <br>
            <div class="row mb-3">
                <label for="duree" class="col-sm-3 col-form-label">Duree</label>
                <div class="col-sm-9">
                    <input type="number" name="duree" class="form-control" id="duree" required>
                    <div class="invalid-feedback">Duree obligatoire!</div>
                </div>
            </div>           
            <br>
            <div class="row mb-3">
                <label for="duree" class="col-sm-3 col-form-label">Prix</label>
                <div class="col-sm-9">
                    <input type="number" name="prix" class="form-control" id="prix" required>
                    <div class="invalid-feedback">Prix obligatoire!</div>
                </div>
            </div> 
            </br>
            
            <div class="col-10">
            <label class="col-sm-4 col-form-label">Ajouter des plats</label>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal"
                                        class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i>
                                        Plats</button>
            </div>

<!-- Basic Modal -->
<div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Liste des plats</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Types</th>
                                    <th scope="col">prix</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php for($i=0; $i<count($plats); $i++){ ?>
                                  <tr>
                                    <th scope="row">
                                        <input class="form-check-input" type="checkbox" name="plat[]" id="plat<?php echo $i; ?>" value="<?php echo $plats[$i]['idPlat']; ?>">
                                    </th>
                                    <td>
                                        <?php echo $plats[$i]['plat']; ?>
                                    </td>
                                    <td>
                                        <?php echo $plats[$i]['types']; ?>
                                    </td>
                                    <td>
                                        <?php echo $plats[$i]['prix']; ?>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-dismiss="modal">Valider</button>
                            </div>
                        </div>
                    </div>
                </div><!-- End Basic Modal-->

            <div class="col-10">
            <label class="col-sm-4 col-form-label">Ajouter des activites</label>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal1"
                                        class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i>
                                        Activites</button>
            </div>

            <div class="modal fade" id="basicModal1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Liste des activites</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Yes/No</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Types</th>
                                    <th scope="col">prix</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php for($i=0; $i<count($activites); $i++){ ?>
                                  <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="activite[]" id="activite<?php echo $i; ?>" value="<?php echo $activites[$i]['idActivite']; ?>">
                                    </td>
                                    <td>
                                    <?php echo $activites[$i]['act']; ?>
                                    </td>
                                    <td>
                                    <?php echo $activites[$i]['quantite']; ?>
                                    </td>
                                    <td>
                                    <?php echo $activites[$i]['unite']; ?>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-dismiss="modal">Valider</button>
                            </div>
                        </div>
                    </div>
                </div>          
            <br>
            <center><button type="submit" class="btn btn-primary" >Ajouter</button></center>
            <hr>
        </form>
    </div>

    <!-- <script src="<?php //echo base_url('assets/js/uploader.js') ?> " defer></script> -->
</body></div>
</div>
</section>
</main>
<br>