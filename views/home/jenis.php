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
        <h1 class="font-weight-normal">Rumah Sakit</h1>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-6 py-3">
                <a class="btn btn-success" href="create" role="button">Tambah</a>
              </div>
              <div>
                <table class="table table-striped">
                  <thead class="table-success">
                    <tr>
                      <td>Nomor</td>
                      <td>Nama</td>
                      <td>Alamat</td>
                      <td>Latlong</td>
                      <td>Jenis</td>
                      <td>Deskripsi</td>
                      <td>Skor</td>
                      <td>Kecamatan</td>
                      <td>Website</td>
                      <td>Dokter</td>
                      <td>Pegawai</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <?php
                  $nomor=1;
                  foreach($jen as $obj){
                  ?>
                  <tbody>
                    <tr>
                      <td><?=$nomor?></td>
                      <td><?=$obj->nama?></td>
                      <td><?=$obj->alamat?></td>
                      <td><?=$obj->latlong?></td>
                      <td><?=$obj->jenis_id?></td>
                      <td><?=$obj->deskripsi?></td>
                      <td><?=$obj->skor_rating?></td>
                      <td><?=$obj->kecamatan_id?></td>
                      <td><?=$obj->website?></td>
                      <td><?=$obj->jumlah_dokter?></td>
                      <td><?=$obj->jumlah_pegawai?></td>
                      <td>
                        <a href="<?php echo base_url('home/view?id=')?><?=$obj->id?>" class="btn btn-primary btn-sm active">Detail</a>
                        <div>
                        <a href="<?php echo base_url('home/edit?id=')?><?=$obj->id?>" class="btn btn-success btn-sm active">Edit</a>
                        <a href="<?php echo base_url('home/delete?id=')?><?=$obj->id?>" class="btn btn-danger btn-sm active" onclick="if(!confirm('Anda Yakin Hapus<?=$obj->nama?>?')) {return false}">Hapus</a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <?php 
                $nomor++;
                } 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section banner-home bg-image" style="background-image: url(<?php echo base_url('assets/img/banner-pattern.svg')?>);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="<?php echo base_url('assets/img/mobile_app.png')?>" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="<?php echo base_url('ssets/img/google_play.svg')?>" alt=""></a>
          <a href="#" class="ml-2"><img src="<?php echo base_url('assets/img/app_store.svg')?>" alt=""></a>
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