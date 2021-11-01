
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Login</title>
    
    <link rel="apple-touch-icon" href="<?=base_url('assets/center/assets/images/logo_umri.png')?>">
    <link rel="shortcut icon" href="<?=base_url('assets/center/assets/images/logo_umri.png')?>">
    
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?=base_url('assets/global/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/global/css/bootstrap-extend.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/center/assets/css/site.min.css')?>">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?=base_url('assets/global/vendor/animsition/animsition.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/global/vendor/asscrollable/asScrollable.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/global/vendor/switchery/switchery.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/global/vendor/intro-js/introjs.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/global/vendor/slidepanel/slidePanel.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/global/vendor/flag-icon-css/flag-icon.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/center/assets/examples/css/pages/login-v2.css')?>">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?=base_url('assets/global/fonts/web-icons/web-icons.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/global/fonts/brand-icons/brand-icons.min.css')?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <script src="<?=base_url('assets/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login-v2 layout-full page-dark">
  <div class="page" style="background-image: url('assets/login.jpg'); background-size: cover;">

    <style>
      body {
        background-color: white;
      }
    </style>
    <!-- Page -->
    <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content">
        <div class="page-brand-info">
          <div class="brand">
            <img class="brand-img" src="<?=base_url('assets/logo_umri.png" alt="...')?>" style="width: 80px">
            <h2 class="brand-text " style="font-size: 25pt">System Informasi Judul Skripsi Fakultas FKIP Muhammadiah Riau</h2>
          </div>
      <!--     <p class="font-size-20"></p> -->
        </div>

        <div class="page-login-main animation animation-duration-2">
          <div class="brand hidden-md-up">
            <img class="brand-img" src="<?=base_url('assets/center/assets/images/bg.png" alt="...')?>">
          
          </div>
          <h3 class="font-size-24">Sign In</h3>

          <p>Masukkan Username dan Password Anda</p>
			
			     <?php if($error=$this->session->flashdata('alert')):?>
            <div class="alert alert-success">
              <strong><?php echo $error?></strong>
            </div>
            <?php endif ?>

            <?php if($error=$this->session->flashdata('login')):?>
            <div class="alert alert-danger">
              <strong><?php echo $error?></strong>
            </div>
            <?php endif ?>


          <form method="post" action="<?php echo base_url('login/proseslogin') ?>">
            <div class="form-group">
              <label class="sr-only" for="inputEmail">ID User Anda</label>
              <input type="text" class="form-control" id="inputEmail" name="username" placeholder="ID User Anda" autofocus required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" name="password"
                placeholder="Password" required><?php echo form_error('password') ?>
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember me</label>
              </div>
              <a class="float-right" href="forgot-password.html">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>

          <p>Belum Punya Akun? <a href="<?=base_url('register')?>">Daftar disini</a></p>

          <footer class="page-copyright">
            <p></p>
            <p>Universitas Muhammadiyah Riau© 2021.</p>
            <div class="social">
              <a class="btn btn-icon btn-round social-instagram mx-5" href="https://www.instagram.com/kampus_umri/?hl=id">
            <i class="icon bd-instagram" aria-hidden="true"></i>
          </a>
              <a class="btn btn-icon btn-round social-facebook mx-5" href="https://id-id.facebook.com/kampusUMRI/">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
              <a class="btn btn-icon btn-round social-youtube mx-5" href="https://www.youtube.com/channel/UC4RkiQ3oWqLLf2-kWa672kw">
            <i class="icon bd-youtube" aria-hidden="true"></i>
          </a>
            </div>
          </footer>
        </div>

      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?=base_url('assets/global/vendor/babel-external-helpers/babel-external-helpers.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/jquery/jquery.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/popper-js/umd/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/bootstrap/bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/animsition/animsition.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/mousewheel/jquery.mousewheel.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/asscrollbar/jquery-asScrollbar.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/asscrollable/jquery-asScrollable.js')?>"></script>
    
    <!-- Plugins -->
    <script src="<?=base_url('assets/global/vendor/switchery/switchery.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/intro-js/intro.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/screenfull/screenfull.js')?>"></script>
    <script src="<?=base_url('assets/global/vendor/slidepanel/jquery-slidePanel.js')?>"></script>
        <script src="<?=base_url('assets/global/vendor/jquery-placeholder/jquery.placeholder.js')?>"></script>
    
    <!-- Scripts -->
    <script src="<?=base_url('assets/global/js/Component.js')?>"></script>
    <script src="<?=base_url('assets/global/js/Plugin.js')?>"></script>
    <script src="<?=base_url('assets/global/js/Base.js')?>"></script>
    <script src="<?=base_url('assets/global/js/Config.js')?>"></script>
    
    <script src="<?=base_url('assets/center/assets/js/Section/Menubar.js')?>"></script>
    <script src="<?=base_url('assets/center/assets/js/Section/Sidebar.js')?>"></script>
    <script src="<?=base_url('assets/center/assets/js/Section/PageAside.js')?>"></script>
    <script src="<?=base_url('assets/center/assets/js/Plugin/menu.js')?>"></script>
    
    <!-- Config -->
    <script src="<?=base_url('assets/global/js/config/colors.js')?>"></script>
    <script src="<?=base_url('assets/center/assets/js/config/tour.js')?>"></script>
    <script>Config.set('assets', '<?=base_url('assets/center/assets')?>;</script>
    
    <!-- Page -->
    <script src="<?=base_url('assets/center/assets/js/Site.js')?>"></script>
    <script src="<?=base_url('assets/global/js/Plugin/asscrollable.js')?>"></script>
    <script src="<?=base_url('assets/global/js/Plugin/slidepanel.js')?>"></script>
    <script src="<?=base_url('assets/global/js/Plugin/switchery.js')?>"></script>
        <script src="<?=base_url('assets/global/js/Plugin/jquery-placeholder.js')?>"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
