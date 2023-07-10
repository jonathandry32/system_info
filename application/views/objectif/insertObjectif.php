<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Inserer un nouvel objectif</h5>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo site_url("Objectif/insertObjectif"); ?>" novalidate>
                  
                <div class="row mb-3">
                      <label class="col-sm-3 col-form-label"> Objectif </label>
                      <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="objectif">
                            <?php
                            foreach($objectifs as $g) 
                            {
                                ?>
                                    <option value="<?php echo $g['idTypeObjectif'];?>"><?php echo $g['nom'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                      </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-3 col-form-label">Poids minimum souhaité</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="minvaleur" required>
                      <div class="invalid-feedback">Poids minimum souhaité obligatoire!</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-3 col-form-label">Poids maximum souhaité</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="maxvaleur" required>
                      <div class="invalid-feedback">Poids maximum souhaité obligatoire!</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-3 col-form-label">Poids minimum recquis</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="poidsmin" required>
                      <div class="invalid-feedback">Poids minimum recquis obligatoire!</div>
                    </div>
                  </div>
        
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-3 col-form-label">Poids maximum recquis</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="poidsmax" required>
                      <div class="invalid-feedback">Poids maximum recquis obligatoire!</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-3 col-form-label">Taille minimum recquis</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="taillemin" required>
                      <div class="invalid-feedback">Taille minimum recquis obligatoire!</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-3 col-form-label">Taille maximum recquis</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="taillemax" required>
                      <div class="invalid-feedback">Taille maximum recquis obligatoire!</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                      <label class="col-sm-3 col-form-label"> Régime </label>
                      <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="regime">
                            <?php
                            foreach($regimes as $g) 
                            {
                                ?>
                                    <option value="<?php echo $g['idRegime'];?>"><?php echo $g['nom'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                      </div>
                  </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100 " type="submit">Ajouter</button>
                </div>
              </form>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->