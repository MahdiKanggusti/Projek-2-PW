<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/maicons.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl-carousel/css/owl.carousel.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate/animate.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>">
</head>
<body>
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> 0813 8877 7777</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> depoksehat@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Depok</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(<?php echo base_url('assets/img/bg_image_1.jpg')?>);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal">User</h1>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 table-responsive">
          <div class="d-flex flex-column">
            <div class="col-sm-6 py-3">
                <table class="table table-striped">
                    <thead class="table-success">
                      <tr>
                        <th>Nomor</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Dibuat Tgl</th>  
                        <th>Terakhir Login</th>  
                        <th>Status</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <?php
                    $nomor = 1;
                    foreach($usr as $user){
                    ?>
                    <tbody>                  
                        <tr>
                          <td><?=$nomor?></td>
                          <td><?=$user->username?></td>
                          <td><?=$user->email?></td>
                          <td><?=$user->created_at?></td>
                          <td><?=$user->last_login?></td>
                          <td><?=$user->status?></td>
                          <td><?=$user->role?></td>
                          <td>
                            <a href="<?php echo base_url('user/edit?id=')?><?=$user->id?>" class="btn btn-success btn-sm active">Edit</a>
                            <a href="<?php echo base_url('user/delete?id=')?><?=$user->id?>" class="btn btn-danger btn-sm active" onclick="if(!confirm('Anda Yakin Hapus<?=$user->username?>?')) {return false}">Hapus</a>
                          </td>
                        </tr>
                    </tbody>
                    <?php
                    $nomor++;
                    }
                    ?>
                 </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Faskes</h5>
          <ul class="footer-menu">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Kecamatan</h5>
          <ul class="footer-menu">
            <li><a href="#"></a></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Admin</h5>
          <ul class="footer-menu">
            <li><a href="<?php echo base_url('index.php/user/index')?>">User</a></li>
            <li><a href="<?php echo base_url('index.php/kecamatan/index')?>">Kecamatn</a></li>
            <li><a href="<?php echo base_url('index.php/komen/index')?>">Komentar</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Kontak</h5>
          <p class="footer-link mt-2">Kantor Balai Kota Depok, Margonda</p>
          <a href="#" class="footer-link"> 0813 8877 7777</a>
          <a href="#" class="footer-link"> depoksehat@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">   Copyright &copy; 2022 <a target="_blank">Faskes PW</a>. All right reserved</p>
    </div>
  </footer>

<script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

<script src="<?php echo base_url('assets/vendor/owl-carousel/js/owl.carousel.min.js')?>"></script>

<script src="<?php echo base_url('assets/vendor/wow/wow.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/theme.js')?>"></script>
  
</body>
</html>