<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="<?php echo base_url("assets/css/maicons.css")?>">

  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css")?>">

  <link rel="stylesheet" href="<?php echo base_url("assets/vendor/owl-carousel/css/owl.carousel.css")?>">

  <link rel="stylesheet" href="<?php echo base_url("assets/vendor/animate/animate.css")?>">

  <link rel="stylesheet" href="<?php echo base_url("assets/css/theme.css")?>">
  <style>
    .circular-image {
     border: 1px solid #000000;
     width: 40px;
     height: 40px;
     overflow: hidden;
     border-radius: 50%;
    }
  </style>
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

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo base_url('index.php/login');?>">Login / Register</a>
            </li>
          </ul>
          <div class="user-panel d-flex">
            <div class="nav-link">
              <a href="#" class="d-block">
                <?php
                  if($this->session->has_userdata('USERNAME')){
                    echo $this->session->userdata('USERNAME');
                    echo '-'.$this->session->userdata('ROLE');
                  }
                ?>
              </a>
            </div>
            <div class="image ">
              <img src="<?php echo base_url('dist/img/user2-160x160.jpg')?>" class="circular-image" alt="User Image">
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(<?php echo base_url('assets/img/bg_image_1.jpg')?>);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Layanan Faskes 24 Jam</span>
        <h1 class="display-4">DEPOK HEALTH</h1>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Layanan</span> 24 Jam</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Sangat</span> Aman</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Layanan</span> Berkualitas</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Selamat datang di <br> Depok Health</h1>
            <p class="text-grey mb-4">Sistem Informasi Kota Depok Sehat menampilkan data tiap Kegiatan yang telah dilakukan dengan menggunakan tampilan peta yang interaktif. Ayo berpartisipasi dan temukan kegiatan Kota Sehat disekitarmu serta info Fasilitas Kesehatan yang ada di Kota Depok</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="<?php echo base_url('assets/img/bg-doctor.png')?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Dokter Kita</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo base_url('assets/img/doctors/doctor_2.jpg')?>" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Mahdi Kanggusti</p>
              <span class="text-sm text-grey">Spesialis penyakit dalam</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo base_url('assets/img/doctors/doctor_2.jpg')?>" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Yahya Ayyas</p>
              <span class="text-sm text-grey">Psikiater</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo base_url('assets/img/doctors/doctor_2.jpg')?>" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Endang Supriyadi</p>
              <span class="text-sm text-grey">Poli Umum</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo base_url('assets/img/doctors/doctor_3.jpg')?>" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Natasya Kurnia</p>
              <span class="text-sm text-grey">Poli Sendi</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo base_url('assets/img/doctors/doctor_3.jpg')?>" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Amelia Yusni</p>
              <span class="text-sm text-grey">Dokter Psikologi</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Info Fasilitas Kesehatan</h1>
        <a class="btn btn-success" href="<?php echo base_url('home/createjenis')?>" role="button">Tambah</a>
      </div>
      <div class="row d-flex mt-5">
        <?php
        foreach($skt as $obj){
        ?>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="" class="post-thumb">
                <img src="<?php echo base_url('assets/img/blog/blog_1.jpg')?>" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="<?php echo base_url('home/jenis?id=')?><?=$obj->id?>"><?=$obj->nama?></a></h5>
              <div>
                <a href="<?php echo base_url('home/editjenis?id=')?><?=$obj->id?>" class="btn btn-success btn-sm active">Edit</a>
                <a href="<?php echo base_url('home/deletejenis?id=')?><?=$obj->id?>" class="btn btn-danger btn-sm active" onclick="if(!confirm('Anda Yakin Hapus<?=$obj->nama?>?')) {return false}">Hapus</a>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
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
          <h1 class="font-weight-normal mb-3">Get easy access of all features using Depok Health Application</h1>
          <a href="#"><img src="<?php echo base_url('assets/img/google_play.svg')?>" alt=""></a>
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