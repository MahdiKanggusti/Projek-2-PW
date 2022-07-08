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
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Depok</span>-Health</a>

        <!-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
             <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1"> -->
          <!-- </div>
        </form> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(<?php echo base_url('assets/img/bg_image_1.jpg')?>);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <!-- <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav> -->
        <h1 class="font-weight-normal">Komentar</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="comment-form-wrap pt-5 m-5">
    <h3 class="mb-5">Berikan Komentar</h3>
    <?php echo form_open('komen/save')?>
    <form action="#" class="">
      <div class="form-row form-group">
        <div class="col-md-6">
          <label for="name">ID Name *</label>
          <input type="text" class="form-control" id="name" value="">
        </div>
        <div class="col-md-6">
          <label for="number">Rating *</label>
          <select id="jenis" name="jenis" class="custom-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="number">Faskes *</label>
        <select id="jenis" name="jenis" class="custom-select">
          <option value="1">Rumah Sakit</option>
          <option value="2">Klinik Gigi</option>
          <option value="3">Klinik Umum</option>
          <option value="4">Puskesmas</option>
          <option value="5">Apotik</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Pesan</label>
        <textarea name="isi" id="message" cols="30" rows="8" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Kirim" class="btn btn-primary">
      </div>
    </form>
    <?php echo form_close()?>
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