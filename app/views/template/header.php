<?php



?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=ASSETS?>assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title><?= $data['page_title']   . ' | ' .WEBSITE_NAME ?></title>

    <meta name="description" content="" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
  	<link rel="stylesheet" href="<?=ASSETS?>calendar/css/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"  href="<?=ASSETS?>assets/img/logo_update.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?=ASSETS?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=ASSETS?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=ASSETS?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?=ASSETS?>assets/vendor/libs/apex-charts/apex-charts.css" />
    <style>
      .uncolor{
        color: #454545
      }
    </style>
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?=ASSETS?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=ASSETS?>assets/js/config.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?=ROOT?>home" class="app-brand-link">
              
            <img src="<?=ASSETS?>assets/img/logo_update.png" style="width:180px;" alt="" class="p-3 m-2">
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1 pt-3">
            <!-- Dashboard -->
            <li class="menu-item <?php if($data['page_title']=="Accueil"){echo "active";}?> ">
              <a href="<?=ROOT?>home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Accueil</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item  pt-2 <?php if($data['page_title']=="Demande de Conge" || $data['page_title'] == "Demande d'absence" || $data['page_title'] == "Demande attestation de travaille" || $data['page_title'] == "Demande Reafectation" || $data['page_title'] == "Demande attestation de salaire" || $data['page_title'] == "Demande changement nomination" ){echo "active open";}?> ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-edit"></i>
                <div >Demandes</div>
              </a>

              <ul class="menu-sub ">
                <!-- <li class="menu-item ">
                  <a href="<?=ROOT?>demande_conge" class="menu-link">
                    <div >Demande Conges</div>
                  </a>
                </li> -->
                <li class="menu-item <?php if($data['page_title']=="Demande de Conge"){echo "active";}?>">
                  <a href="<?=ROOT?>demande_conge" class="menu-link">
                    <div >Demande Conge</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Demande d'absence"){echo "active";}?>">
                  <a href="<?=ROOT?>demande_absence" class="menu-link">
                    <div >Demande d'absence</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Demande attestation de travaille"){echo "active";}?>">
                  <a href="<?=ROOT?>demande_attestation_travaille" class="menu-link">
                    <div >Demande Attestation de Travail</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Demande attestation de salaire"){echo "active";}?>">
                  <a href="<?=ROOT?>demande_attestation_salaire" class="menu-link">
                    <div >Demande Attestation de Salaire</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Demande changement nomination"){echo "active";}?>">
                  <a href="<?=ROOT?>demande_changement_nomination" class="menu-link">
                    <div >Demande de Changement de Nomination</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Demande Reafectation"){echo "active";}?>">
                  <a href="<?=ROOT?>demande_reafectation" class="menu-link">
                    <div >Demande de Reafectation</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li> -->
            <li class="menu-item pt-2 <?php if($data['page_title']=="Informations Personnels" || $data['page_title']=="Bulletin de Paie"){echo "active open";}?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Consultations</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item <?php if($data['page_title']=="Informations Personnels"){echo "active";}?>">
                  <a href="<?=ROOT?>informations_personnels" class="menu-link">
                    <div data-i18n="Account">Informations Personnels</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Bulletin de Paie"){echo "active";}?>">
                  <a href="<?=ROOT?>bulletin_paie" class="menu-link">
                    <div data-i18n="Notifications">Bulletin de paie</div>
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="pages-account-settings-connections.html" class="menu-link">
                    <div data-i18n="Connections">Connections</div>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="menu-item pt-2  <?php if($data['page_title']=="Visite de Medecin de Travail" || $data['page_title']=="Conceil Discipline"){echo "active open";}?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Convocations</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item <?php if($data['page_title']=="Visite de Medecin de Travail"){echo "active ";}?>">
                  <a href="<?=ROOT?>visite_medecin" class="menu-link" target="">
                    <div data-i18n="Basic">Visite medecin de travail</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Conceil Discipline"){echo "active ";}?>">
                  <a href="<?=ROOT?>conceil_discipline" class="menu-link" target="">
                    <div data-i18n="Basic">Conceil discipline</div>
                  </a>
                </li>
               
              </ul>
            </li>
            <li class="menu-item pt-2 <?php if($data['page_title']=="Note de Procedure"){echo "active ";}?>">
              <a href="<?=ROOT?>note_procedure" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
               
                <div data-i18n="Basic">Notes de Procedure</div>
              </a>
            </li>
            <!-- <li class="menu-item pt-2 <?php if($data['page_title']=="Flux Publique"){echo "active ";}?>">
              <a href="<?=ROOT?>flux_publique" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Flux Publique</div>
              </a>
            </li> -->
<?php   if($_SESSION['role'] == 2):  // le role 2 => admin / le role 1 => user ?>
            <li class="menu-item  pt-2 <?php if($data['page_title']=="Ajouter Employee" || $data['page_title'] == "Modifier Employee" || $data['page_title'] == "Modifier Information de paie" || $data['page_title'] == "Supprimer Employee" ){echo "active open";}?> ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div >G. Employes</div>
              </a>

              <ul class="menu-sub ">
                <li class="menu-item <?php if($data['page_title']=="Ajouter Employee"){echo "active ";}?>">
                  <a href="<?=ROOT?>ajouter_employee" class="menu-link">
                    <div >Ajouter Employee</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Modifier Employee"){echo "active";}?>">
                  <a href="<?=ROOT?>modifier_employee" class="menu-link">
                    <div >Modifier Informations</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Supprimer Employee"){echo "active";}?>">
                  <a href="<?=ROOT?>supprimer_employee" class="menu-link">
                    <div >Supprimer Employee</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Modifier Information de paie"){echo "active";}?>">
                  <a href="<?=ROOT?>information_paie" class="menu-link">
                    <div >Modifier Informations de paie</div>
                  </a>
                </li>

              </ul>
            </li>

            <li class="menu-item  pt-2 <?php if($data['page_title']=="Demandes des absences" || $data['page_title'] == "Gestion changement des nominations" || $data['page_title'] == "Gestion des conges" || $data['page_title'] == "Gestion des reafectations" ){echo "active open";}?> ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-circle"></i>
                <div >G. Demandes</div>
              </a>

              <ul class="menu-sub ">
                <li class="menu-item <?php if($data['page_title']=="Gestion des conges"){echo "active ";}?>">
                  <a href="<?=ROOT?>gestion_conge" class="menu-link">
                    <div >Gestion des conges</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Demandes des absences"){echo "active";}?>">
                  <a href="<?=ROOT?>gestion_absence" class="menu-link">
                    <div >Gestion des absences</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Gestion changement des nominations"){echo "active";}?>">
                  <a href="<?=ROOT?>gestion_changement" class="menu-link">
                    <div >Changement de nomination</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Gestion des reafectations"){echo "active";}?>">
                  <a href="<?=ROOT?>gestion_reafectation" class="menu-link">
                    <div >Demandes de reafectation</div>
                  </a>
                </li>

              </ul>
            </li>
            <li class="menu-item  pt-2 <?php if($data['page_title']=="Ajouter Département" || $data['page_title'] == "Supprimer Département" || $data['page_title'] == "" || $data['page_title'] == "" ){echo "active open";}?> ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-buildings"></i><i class=''></i>
                <div >G. Départements</div>
              </a>

              <ul class="menu-sub ">
                <li class="menu-item <?php if($data['page_title']=="Ajouter Département"){echo "active ";}?>">
                  <a href="<?=ROOT?>ajouter_departement" class="menu-link">
                    <div>Ajouter Département</div>
                  </a>
                </li>
                <li class="menu-item <?php if($data['page_title']=="Supprimer Département"){echo "active";}?>">
                  <a href="<?=ROOT?>supprimer_departement" class="menu-link">
                    <div >Suppr. Département</div>
                  </a>
                </li>
                

              </ul>
            </li>


            <?php   endif;  ?>

           
            <!-- Components -->
            
          </ul> 
        </aside>
        <!-- / Menu -->



                <!-- Layout container -->
                <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                <!-- hadi baqa fiha lkhedma a m3ellem   -->
                <?= $_SESSION['name'] ;?>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="<?=ASSETS?>javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=$data['cropped_image'] ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                             
                              <img src="<?=$data['cropped_image'] ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= $_SESSION['name'] ?>  </span>
                            <small class="text-muted"><?php if($_SESSION['role'] == 2 ){echo "Admin";}elseif($_SESSION['role'] == 1 ){echo "Utilisateur";}?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=ROOT?>informations_personnels">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Mes Informations</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="changer_password">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Changer MOt de pass</span>
                      </a>
                    </li>
                   
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=ROOT?>logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Se Déconnecté</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>