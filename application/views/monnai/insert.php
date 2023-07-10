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
                  <h5 class="card-title text-center pb-0 fs-4">Insertion de code</h5>
                </div>
                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo base_url();?>monnai/insertCode">
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">code</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="code">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">valeur</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="valeur">
                    </div>
                  </div>
                  <div class="row mb-3">
                      <label class="col-sm-3 col-form-label">Utilisable</label>
                      <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="utilisable">
                            <option value="1">Oui</option>
                            <option value="11">Non</option>
                        </select>
                      </div>
                  </div>

                <div class="col-6">
                  <button class="btn btn-secondary w-100" type="reset">Annuler</button>
                </div>
                <div class="col-6">
                  <button class="btn btn-primary w-100 " type="submit">Inserer</button>
                </div>
              </form>
              </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main>