<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Nouveau regime</h5>
                  <p class="text-center small">Entrez les informations pour savoir ce qu'il vous faut.
                  </p>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo site_url("Objectif/prediction"); ?>" novalidate>
                  
                <div class="row mb-3">
                      <label class="col-sm-3 col-form-label"> Type objectif </label>
                      <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="type_objectif">
                            <?php
                            foreach($type_objectif as $g) 
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
                    <label for="inputText" class="col-sm-3 col-form-label">Kilogramme </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="kg" placeholder="Non obligatoire si IMC" value="0" required>
                      <div class="invalid-feedback">Objectif poids obligatoire!</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Poids </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="poids" required>
                      <div class="invalid-feedback">Poids obligatoire!</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Taille</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="taille" required>
                      <div class="invalid-feedback">Taille obligatoire!</div>
                    </div>
                  </div>
        
                  <div class="col-12">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal"
                                        class="btn btn-success rounded-pill w-100 mb-3"><i class="bi bi-plus-circle-fill"></i>
                                        Parametres</button>
                  </div>
                
                <!-- Basic Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Liste des parametres</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col"> Yes/No</th>
                                    <th scope="col">id</th>
                                    <th scope="col">Nom</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php for($i=0; $i < count($paramListe); $i++) { ?>
                                    <tr>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="idParametre" value="<?php echo $paramListe[$i]['idParametre']; ?>">
                                        </td>
                                        <th scope="row">
                                            <?php echo $paramListe[$i]['idParametre']; ?>
                                        </th>
                                        <td>
                                            <?php echo $paramListe[$i]['nom']; ?>
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

                <div class="col-6">
                  <button class="btn btn-secondary w-100" type="reset">Annuler</button>
                </div>

                <div class="col-6">
                  <button class="btn btn-primary w-100 " type="submit">Save</button>
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