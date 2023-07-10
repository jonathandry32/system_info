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
                  <h5 class="card-title text-center pb-0 fs-4">Insertion de parametre</h5>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo base_url();?>parametre/insert" novalidate>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">nom</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nom" required>
                        <div class="invalid-feedback">Nom obligatoire!</div>
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
              <br>
              <div class="card-body">
                <div class="pt-4 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4">Liste des parametres</h5>
                </div>
                
                <center style="margin-bottom: 20px; background:transparent;">
                    <input type="text" id="filter0" onkeyup="filter0()" placeholder="Filtrer par Nom">
                </center>
                    <table class="table"  id="filter">
                        <tr>
                                <th scope="col">Nom</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                        </tr>
                        <?php for($i=0;$i<count($list);$i++){ ?>
                            <tr>
                                <td><?php echo $list[$i]['nom']; ?></td>
                                <td>
                                    <form action="<?php echo base_url();?>parametre/update" method="post">
                                        <input type="hidden" name="idParametre" value="<?php echo $list[$i]['idParametre']; ?>">
                                        <input type="hidden" name="nom" value="<?php echo $list[$i]['nom']; ?>">
                                        <button type="submit" class="btn btn-success" style="color:white"><i class="bi bi-pencil-square"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?php echo base_url();?>parametre/delete" method="post">
                                        <input type="hidden" name="idParametre" value="<?php echo $list[$i]['idParametre']; ?>">
                                        <button type="submit" class="btn btn-danger" style="color:white"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
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
<script src="<?php echo base_url('assets/js/filtrage.js'); ?>"></script>