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

                <form id="login" class="row g-3 needs-validation" method="post" action="<?php echo site_url("Login/inscription"); ?>" novalidate>
                
                <div class="col-12">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal"
                                        class="btn btn-success rounded-pill w-100 mb-3"><i class="bi bi-plus-circle-fill"></i>
                                        Informations de l'utilisateur</button>
                  </div>
                  <!-- Basic Modal -->
                  <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Informations de santé</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Adresse mail</label>
                                  <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">Please enter your Email!</div>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Mot de passe</label>
                                  <div class="col-sm-9">
                                    <input type="password" class="form-control" name="pass" required>
                                    <div class="invalid-feedback">Please enter your Password!</div>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Nom d'utilisateur</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" required>
                                    <div class="invalid-feedback">Please enter your Username!</div>
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
                                    <div class="invalid-feedback">Please enter your Number!</div>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Adresse</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="adresse" required>
                                    <div class="invalid-feedback">Please enter your Adresse!</div>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Date de naissance</label>
                                  <div class="col-sm-9">
                                    <input type="date" class="form-control" name="dtn" required>
                                    <div class="invalid-feedback">Please enter your Birthday!</div>
                                  </div>
                                </div>

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
                <!-- End Basic Modal-->




                  <div class="col-12">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal1"
                                        class="btn btn-success rounded-pill w-100 mb-3"><i class="bi bi-plus-circle-fill"></i>
                                        Informations de santé</button>
                  </div>
                  <!-- Basic Modal -->
                  <div class="modal fade" id="basicModal1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Informations de santé</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Taille</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="taille" required>
                                    <div class="invalid-feedback">Please enter your Size!</div>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="inputText" class="col-sm-3 col-form-label">Poids</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="poids" required>
                                    <div class="invalid-feedback">Please enter your Weight!</div>
                                  </div>
                              </div>
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
                <!-- End Basic Modal-->

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
<!-- Vendor JS Files -->
<script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/chart.js/chart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/quill/quill.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/filtrage.js'); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
