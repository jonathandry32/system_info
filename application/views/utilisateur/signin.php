<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $title; ?></title>
  <meta content="" name="<?php echo $description; ?>">
  <meta content="" name="<?php echo $keywords; ?>">
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">

                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Inscription en tant qu'utilisateur</h5>
                  <p class="text-center small">Entrez les informations requis.
                  </p>
                </div>

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo site_url("Login/inscription"); ?>">
                  
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Adresse mail</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Mot de passe</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" name="pass" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nom d'utilisateur</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="username" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                      <label class="col-sm-3 col-form-label">Genre</label>
                      <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="idGenre">
                            <?php
                            foreach($genre as $g) 
                            {
                                ?>
                                    <option value="<?php echo $g['idGenre'];?>"><?php echo $g['nom'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Numero de telephone</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="tel" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Adresse</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="adresse" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Date de naissance</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="dtn" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Taille</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="taille" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Poids</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="poids" required>
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
