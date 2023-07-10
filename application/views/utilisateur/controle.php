<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Controle</h5>
                  <p class="text-center small">Suivi de votre poids et taille.
                  </p>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo site_url("Utilisateur/insertControle"); ?>">
                  
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Poids </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="poids" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Taille</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="taille" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="daty" required>
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
</main><!-- End #main -->