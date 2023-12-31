<style>
  input{
    border-color:lightgrey ;
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 8px;
    outline: none;
    background-color: var(--background);
  }
</style>
<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Ajout de plat</h5>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo base_url();?>plat/insertPlat" enctype="multipart/form-data" novalidate>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nom</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nom" required>
                      <div class="invalid-feedback">Nom obligatoire!</div>
                    </div>
                  </div>
                  <div class="row mb-3">
                      <label class="col-sm-3 col-form-label">Type de plat</label>
                      <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="idTypePlat">
                            <?php
                            foreach($typePlat as $tp) 
                            {
                                ?>
                                    <option value="<?php echo $tp['idTypePlat'];?>"><?php echo $tp['nom'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Prix</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="prix" required>
                      <div class="invalid-feedback">Prix obligatoire!</div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Picture</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div>

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
</main>