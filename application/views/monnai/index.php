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
                  <h5 class="card-title text-center pb-0 fs-4">Etat actuel du portefeuille</h5>
                  <h6 class="card-title text-center pb-0 fs-4"><?php echo $portefeuille;?> Ar</h6>
                </div>
                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Achat de code</h5>
                </div>
                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo base_url();?>monnai/acheter">
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">code</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="code">
                    </div>
                  </div>

                <div class="col-6">
                  <button class="btn btn-secondary w-100" type="reset">Annuler</button>
                </div>
                <div class="col-6">
                  <button class="btn btn-primary w-100 " type="submit">Acheter</button>
                </div>
              </form>
              </div>
              <br>
              <div class="card-body">
                <div class="pt-4 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4">Liste des codes</h5>
                </div>
    
                <center style="margin-bottom: 20px; background:transparent;">
                        <input type="text" id="filter1" onkeyup="filter1()" placeholder="Filtrer par Code">
                        <input type="text" id="filter2" onkeyup="filter2()" placeholder="Filtrer par Valeur">
                </center>
                    <table class="table" id="filter">
                        <tr>
                                <th>IdCode</th>
                                <th>Code</th>
                                <th>Valeur</th>
                                <th>Utilisable</th>
                        </tr>
                        <?php for($i=0;$i<count($list);$i++){ ?>
                            <tr>
                                <td><?php echo $list[$i]['idCode']; ?></td>
                                <td><?php echo $list[$i]['code']; ?></td>
                                <td><?php echo $list[$i]['valeur']; ?></td>
                                <?php
                                    if($list[$i]['utilisable']==1)
                                    { ?>
                                        <td>Oui</td>
                                    <?php } 
                                    elseif($list[$i]['utilisable']==11)
                                    { ?>
                                        <td>Non</td>
                                    <?php }
                                ?>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main>