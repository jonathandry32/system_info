<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?php echo $title; ?></title>
        <meta content="" name="<?php echo $description; ?>">
        <meta content="" name="<?php echo $keywords; ?>">

        <!-- Favicons -->
        <link href="<?php echo base_url('assets/file/img/'.$this->session->userdata('sary').''); ?>" rel="icon">
        <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <img src="<?php echo base_url('assets/file/img/'.$this->session->userdata('sary').''); ?>" alt="">
                    <span class="d-none d-lg-block">
                        <h4 style="margin-left: 10px; padding-top: 10px;"><?php echo $title; ?></h4>
                    </span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <div class="search-bar">
                <form action="<?php echo base_url("InsertForm/rechercher"); ?>" method="post" class="search-form d-flex align-items-center">
                    <input type="text" name="mot" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                </form>
            </div>

           <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->



                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="<?php echo base_url('assets/file/img/'.$this->session->userdata('sary').''); ?>" alt="Profil"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">
                                <?php ?>
                            </span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>
                                    <?php if($this->session->has_userdata('connected')){ echo $this->session->connected; } ?>
                                </h6>
                                <span>Admin</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('login/logout'); ?>">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Deconnexion</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-heading">General</li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#">
                        <i class="bi bi-house"></i>
                        <span>Accueil</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                
                
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#etatf" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-person-plus"></i><span>Etat Financier</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                     <ul id="etatf" class="nav-content collapse " data-bs-parent="#sidebar-nav">   <li class="nav-item">
                         <li class="nav-item">
                             <a class="nav-link collapsed"  href="<?php echo base_url("Pages/choix_journal"); ?>">
                                 <i class="bi bi-circle"></i><span>Journal</span>
                             </a>
                         </li>
                        <li>
                        <a class="nav-link collapsed"  href="<?php echo base_url("Pages/choix_grandlivre"); ?>">
                            <i class="bi bi-circle"></i><span>Grand Livre</span>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/balance"); ?>">
                                <i class="bi bi-circle"></i><span>balance</span>
                            </a>
                        </li>
                     </ul>
                </li>
                
                <!-- End Components Nav -->
                <li class="nav-heading">Analytique</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-navPCA" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-person-plus"></i><span>PCA</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                     <ul id="tables-navPCA" class="nav-content collapse " data-bs-parent="#sidebar-nav">   <li class="nav-item">
                        <li>
                        <a class="nav-link collapsed"  href="<?php echo base_url("Pages/insertPCA"); ?>">
                            <i class="bi bi-circle"></i><span>Insert PCA</span>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/listPCA"); ?>">
                                <i class="bi bi-circle"></i><span>List PCA</span>
                            </a>
                        </li>
                     </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed"  href="<?php echo base_url("Pages/balance_analytique"); ?>">
                        <i class="bi bi-circle"></i><span>Balance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#t-nav2" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-person-plus"></i><span>Charges</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                     <ul id="t-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">   <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/insertCharges"); ?>">
                                <i class="bi bi-circle"></i><span>Insert Charges</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/charges"); ?>">
                                <i class="bi bi-circle"></i><span>Cout de revient</span>
                            </a>
                        </li>
                     </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo base_url("Pages/toPdf"); ?>">
                        <i class="bi bi-house"></i>
                        <span>PDF</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tablesnav2" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-person-plus"></i><span>Centre et produit</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                     <ul id="tablesnav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">   <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/centre"); ?>">
                                <i class="bi bi-circle"></i><span>Nouveau Centre</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed"  href="<?php echo base_url("Pages/produit"); ?>">
                                <i class="bi bi-circle"></i><span>Nouveau Produit</span>
                            </a>
                        </li>
                     </ul>
                </li>
                <li class="nav-heading">Admin</li>
            </ul>

        </aside><!-- End Sidebar-->
