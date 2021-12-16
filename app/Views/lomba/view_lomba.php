<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/styles.css">

  <title>Halaman Magang</title>
</head>

<body class="bodycolor">
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm nav-bgcolor">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img class="mx-3" src="/img/logo.png" alt="LAGA Mahasiswa" style="width:120px;">
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link menupage mx-5" href="<?= base_url(); ?>/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menupage mx-5" href="<?= base_url(); ?>/magang">Magang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menupage-active mx-5" href="<?= base_url(); ?>/lomba">Lomba</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menupage mx-5" href="<?= base_url(); ?>/about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link loginmenu rounded-pill mx-5" href="<?= base_url(); ?>/login">LOG IN</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- body -->
  <div class="container mt-5">
    <h3 class="text-center">Pilihan Kelompok Lomba</h3>
    <br>
    <div class="row">
      <div class="col">
        <a href="<?= base_url(); ?>/magang/keuangan" class="text-muted texthitam">
          <div class="card animmenu" style="width: 15rem;">
            <img class="card-img-top" src="/img/keuangan_magang.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text text-center">Unit Kegiatan Mahasiswa</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col mx-1">
        <a href="<?= base_url(); ?>/magang/ict" class="text-muted texthitam">
          <div class="card animmenu" style="width: 15rem;">
            <img class="card-img-top" src="/img/keuangan_magang.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text text-center">Himpunan Jurusan</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="<?= base_url(); ?>/magang/marketing" class="text-muted texthitam">
          <div class="card animmenu" style="width: 15rem;">
            <img class="card-img-top" src="/img/keuangan_magang.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text text-center">BEM UPJ</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="<?= base_url(); ?>/magang/studio" class="text-muted texthitam">
          <div class="card animmenu" style="width: 15rem;">
            <img class="card-img-top" src="/img/keuangan_magang.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text text-center">General UPJ</p>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <!-- semua magang -->
  <div class="container mt-5 ">
    <div class="row bghijau bgradius">
      <h4 class="textputih mt-4 text-center">Semua Kegiatan Lomba</h4>
      <div class="row mt-3 d-flex justify-content-center align-items-center">
        <div class="col-sm-6 mt-3">
          <div class="card w-80">
            <div class="card-body">
              <a href="#" class="text-muted textputih">
                <h5 class="card-title">FORKA FEST : Lomba Pemrograman Bagi Seluruh Mahasiswa di Indonesia</h5>
              </a>
              <p class="card-text"> Festival tahunan Kegiatan Mahasiswa yang dilaksanakan
                <br> Oleh Himpunan Mahasiswa Informatika UPJ
              </p>
              <p class="card-text"> Total Hadiah 10 Juta Rupiah * 50 JSDP Bagi Pemenang</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-3">
          <div class="card w-80">
            <div class="card-body">
              <a href="#" class="text-muted textputih">
                <h5 class="card-title">Internal Badminton Champions : Lomba Tim Ganda
                  Campuran, Ganda Putra, dan Tunggal Putra</h5>
              </a>
              <p class="card-text">Lomba tahunan UKM Bulutangkis UPJ
                <br> Akan dilaksanakan pada tanggal 2-4 November 2021 di GOR PB Jaya Raya Bintaro
              </p>
              <p class="card-text">Total Hadiah 10 Juta Rupiah * 30 JSDP Bagi Pemenangg
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-3">
          <div class="card w-80">
            <div class="card-body">
              <a href="#" class="text-muted textputih">
                <h5 class="card-title">FORKA FEST : Lomba Pemrograman Bagi Seluruh Mahasiswa di Indonesia</h5>
              </a>
              <p class="card-text"> Festival tahunan Kegiatan Mahasiswa yang dilaksanakan
                <br> Oleh Himpunan Mahasiswa Informatika UPJ
              </p>
              <p class="card-text"> Total Hadiah 10 Juta Rupiah * 50 JSDP Bagi Pemenang</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mt-3">
          <div class="card w-80">
            <div class="card-body">
              <a href="#" class="text-muted textputih">
                <h5 class="card-title">Internal Badminton Champions : Lomba Tim Ganda
                  Campuran, Ganda Putra, dan Tunggal Putra</h5>
              </a>
              <p class="card-text">Lomba tahunan UKM Bulutangkis UPJ
                <br> Akan dilaksanakan pada tanggal 2-4 November 2021 di GOR PB Jaya Raya Bintaro
              </p>
              <p class="card-text">Total Hadiah 10 Juta Rupiah * 30 JSDP Bagi Pemenangg
              </p>
            </div>
          </div>
        </div>


      </div>

      <br>
    </div>
    <br>
  </div>


  <!-- footer -->
  <footer class="py-2">
    <div class="container-fluid px-4">
      <div class="align-items-center d-flex small">
        <div class="text-muted col-sm">
          <img src="/img/logo2.png" alt="LAGA Mahasiswa" width="9%">
          &nbsp; Copyright &copy; 2021
        </div>
        <div class="text-muted">
          <a href="#" class="text-muted textputih">Yanwar</a>
          &middot;
          <a href="#" class="text-muted textputih">Zahra</a>
          &middot;
          <a href="#" class="text-muted textputih">Raflie</a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>