<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Sistem Informasi Pengajuan Penelitian Universitas Muhammadiah Riau</title>

  <!-- <?= base_url('assets/vendors/jquery/dist/jquery.min.js') ?> -->
  <link rel="apple-touch-icon" href="<?= base_url('assets/logo_umri.png') ?>">
  <link rel="shortcut icon" href="<?= base_url('assets/logo_umri.png') ?>">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/css/bootstrap-extend.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/center/assets/css/site.min.css') ?>">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/animsition/animsition.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/asscrollable/asScrollable.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/switchery/switchery.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/intro-js/introjs.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/slidepanel/slidePanel.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/flag-icon-css/flag-icon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/chartist/chartist.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/jvectormap/jquery-jvectormap.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/formvalidation/formValidation.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/forms/validation.css') ?>">
  <!-- font icon -->
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/font-awesome/font-awesome.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/web-icons/web-icons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/brand-icons/brand-icons.min.css') ?>">

  <!-- data table -->
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/tables/datatable.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') ?>">


  <link rel="stylesheet" href="<?= base_url('assets/center/assets/examples/css/dashboard/v1.css') ?>">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/weather-icons/weather-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/web-icons/web-icons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/global/fonts/brand-icons/brand-icons.min.css') ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
  <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
  <![endif]-->

  <!-- Scripts -->
  <script src="<?= base_url('assets/global/vendor/breakpoints/breakpoints.js') ?>"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="animsition dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-inverse navbar-fixed-top navbar-mega" role="navigation" style="background-color: #d9d24d">

    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../assets/images/logo.png" title="Remark">
      </div>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
              </i>
            </a>
          </li>
          <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="nav-item hidden-float">
            <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up" role="button">

              <!-- <img src="<?= base_url('assets/global/portraits/5.jpg') ?>" alt="..."> -->
              <i class="icon wb-user"></i>

            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              <div class="dropdown-divider" role="presentation"></div>
              <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-pill badge-danger up"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <div class="dropdown-menu-header">
                <h5>NOTIFIKASI</h5>
                <!-- <span class="badge badge-round badge-danger">New 5</span> -->
              </div>

              <div class="list-group">
                <div data-role="container">
                  <?php
                  if ($this->uri->segment('1') == 'Admin' or 'pimpinan' or 'teknisi' or 'pengadu') :
                  ?>
                    <?php
                    foreach ($data->result_array() as $i) :
                      $id_pengajuan = $i['id_pengajuan'];
                      $nama = $i['nama'];
                      $nim = $i['nim'];
                    ?>
                      <div data-role="content">
                        <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">

                          <div class="media">
                            <div class="pr-10">
                              <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                            </div>


                            <div class="media-body">
                              <h6 class="media-heading"><?php echo $nama; ?></h6>
                              <time class="media-meta" datetime="2018-06-12T20:50:48+08:00"><?php echo $nim; ?></time>
                            </div>

                          </div>

                        </a>
                      </div>
                      <hr>
                    <?php endforeach ?>
                  <?php endif ?>
                </div>
              </div>
              <div class="dropdown-menu-footer">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  Lihat Semua pengajuan
                </a>
              </div>
            </div>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-header">


      <div class="cover overlay">
        <img class="cover-image" src="<?= base_url('assets/bg_aplikasi.jpg') ?>" alt="...">
        <div class="overlay-panel vertical-align overlay-background">
          <div class="vertical-align-middle">
            <a class="avatar avatar-lg" href="javascript:void(0)">
              <!-- <img src="../../global/portraits/1.jpg" alt=""> -->
            </a>
            <div class="site-menubar-info">
              <h5 class="site-menubar-user" style="text-align: center;">Selamat Datang</h5><br>
              <p class="site-menubar-email" style="text-align: center;"><?php echo $this->session->userdata('nama'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-menubar-body">
      <div>
        <div>

          <?php if ($this->session->userdata('level') == "Admin") { ?>

            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-item has-sub">
                <a href="<?= base_url('admin/index') ?>">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Dashboard</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="<?= base_url('admin/pengajuan') ?>">
                  <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                  <span class="site-menu-title">Kelola Pengajuan</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="<?= base_url('admin/pengguna') ?>">
                  <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                  <span class="site-menu-title">Kelola Pengguna</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>

              <li class="site-menu-item has-sub">
                <a href="<?= base_url('dosen/index') ?>">
                  <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                  <span class="site-menu-title">Kelola Dosen</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="<?= base_url('admin/arsip') ?>">
                  <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                  <span class="site-menu-title">history Pengajuan</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
            </ul>
            </li>
            </ul>


          <?php } else { ?>



            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-item has-sub">
                <a href="<?= base_url('prodi/index') ?>">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">dashboard</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="<?= base_url('prodi/pengajuan') ?>">
                  <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Pengajuan</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="<?= base_url('prodi/arsip') ?>">
                  <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                  <span class="site-menu-title">History pengajuan</span>
                  <span class="site-menu-arrow"></span>
                </a>
              </li>
            </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>