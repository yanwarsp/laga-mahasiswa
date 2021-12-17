<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/styles.css">

  <title>Detail Lomba BEM</title>
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
        <?php if (!session()->get('logged_in')) : ?>
          <li class="nav-item">
            <a class="nav-link loginmenu rounded-pill mx-5" href="<?= base_url(); ?>/login">LOG IN</a>
          </li>
        <?php endif; ?>
        <?php if (session()->get('logged_in')) : ?>
          <li class="nav-item">
            <a class="nav-link loginmenu rounded-pill mx-5" href="<?= base_url(); ?>/profil"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
              </svg></a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <!-- Body -->
  <div class="jumbotron">
    <br>
    <h2 class="text-center">Ayo Ikuti Lomba Yang Sedang Berlangsung !</h2>
  </div>
  <br> <br>
  <div class="row">
    <div class="col-sm-4">

      <div class="card w-80">
        <div class="card-body">
          <a href="#" class="text-muted textputih">
            <h5 class="card-title">FORKA FEST : Lomba Pemrograman Bagi Seluruh Mahasiswa di Indonesia </h5>
          </a>
          <p class="card-text">Festival tahunan Kegiatan Mahasiswa yang dilaksanakan <br>
            Oleh Himpunan Mahasiswa Informatika UPJ</p>
          <p class="card-text">Total Hadiah 10 Juta Rupiah * 50 JSDP Bagi Pemenang</p>
        </div>
      </div>

      <br>
      <div class="card w-80">
        <div class="card-body">
          <a href="#" class="text-muted textputih">
            <h5 class="card-title">FORKA FEST : Lomba Pemrograman Bagi Seluruh Mahasiswa di Indonesia </h5>
          </a>
          <p class="card-text">Festival tahunan Kegiatan Mahasiswa yang dilaksanakan <br>
            Oleh Himpunan Mahasiswa Informatika UPJ</p>
          <p class="card-text">Total Hadiah 10 Juta Rupiah * 50 JSDP Bagi Pemenang</p>
        </div>
      </div>
      <br>
      <div class="card w-80">
        <div class="card-body">
          <a href="#" class="text-muted textputih">
            <h5 class="card-title">FORKA FEST : Lomba Pemrograman Bagi Seluruh Mahasiswa di Indonesia </h5>
          </a>
          <p class="card-text">Festival tahunan Kegiatan Mahasiswa yang dilaksanakan <br>
            Oleh Himpunan Mahasiswa Informatika UPJ</p>
          <p class="card-text">Total Hadiah 10 Juta Rupiah * 50 JSDP Bagi Pemenang</p>
        </div>
      </div>
    </div>

    <div class="col-sm-8" style="background-color:#FFFFFF">
      <h3><br>Hallo Test saja ya</h3>
      <br>
      <p>aofuy dfuafahefjkhe fksh fhjsdfg jsdhfg jsdhf gjsdkhfgsjdfhgs djg sdjf</p>
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
          <a href="https://github.com/yanwarsp" class="text-muted textputih">Yanwar</a>
          &middot;
          <a href="https://github.com/Zahraauliafauzia" class="text-muted textputih">Zahra</a>
          &middot;
          <a href="https://github.com/Raflie26" class="text-muted textputih">Raflie</a>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>