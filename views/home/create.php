<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="<?php echo base_url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')?>"> 
  <link rel="stylesheet" href="<?php echo base_url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')?>">
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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal">Kelola Faskes</h1>
      </div>
    </div>
  </div>
  
  <?php echo form_open('home/save')?>
  <div class="m-5">
  <form >
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Rumah sakit</label> 
      <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="alamat" class="col-4 col-form-label">Alamat Rumah sakit</label> 
      <div class="col-8">
        <input id="alamat" name="alamat" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="latlong" class="col-4 col-form-label">Latlong</label> 
      <div class="col-8">
        <input id="latlong" name="latlong" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">Jenis Faskes</label> 
      <div class="col-8">
        <select id="jenis" name="jenis" class="custom-select">
          <option value="1">Rumah Sakit</option>
          <option value="2">Klinik Gigi</option>
          <option value="3">Klinik Umum</option>
          <option value="4">Puskesmas</option>
          <option value="5">Apotik</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
      <div class="col-8">
        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="latlong" class="col-4 col-form-label">Rating</label> 
      <div class="col-8">
        <input id="rating" name="rating" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="select" class="col-4 col-form-label">Kecamatan</label> 
      <div class="col-8">
        <select id="kecamatan" name="kecamatan" class="custom-select">
          <option value="1">Beji</option>
          <option value="2">Pancoran Mas</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="website" class="col-4 col-form-label">Website</label> 
      <div class="col-8">
        <input id="website" name="website" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="dokter" class="col-4 col-form-label">Jumlah Dokter</label> 
      <div class="col-8">
        <input id="dokter" name="dokter" type="number" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="pegawai" class="col-4 col-form-label">Jumlah Pegawai</label> 
      <div class="col-8">
        <input id="pegawai" name="pegawai" type="number" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </div>
  <?php echo form_close()?>
  
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

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>