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
          <a class="nav-link menupage-active mx-5" href="<?= base_url(); ?>/magang">Magang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menupage mx-5" href="<?= base_url(); ?>/lomba">Lomba</a>
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

  <!-- body -->
  <div class="container mt-5">
    <h3 class="text-center">Pilihan Sektor Magang</h3>
    <br>
    <div class="row">
      <div class="col">
        <a href="<?= base_url(); ?>/magang/keuangan" class="text-muted texthitam">
          <div class="card animmenu" style="width: 12rem;">
            <img class="card-img-top" src="/img/keuangan_magang.jpg" alt="Card image cap" height="120px">
            <div class="card-body">
              <p class="card-text text-center">Keuangan</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col mx-1">
        <a href="<?= base_url(); ?>/magang/ict" class="text-muted texthitam">
          <div class="card animmenu" style="width: 12rem;">
            <img class="card-img-top" src="/img/ict.jpg" alt="Card image cap" height="120px">
            <div class="card-body">
              <p class="card-text text-center">ICT</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="<?= base_url(); ?>/magang/marketing" class="text-muted texthitam">
          <div class="card animmenu" style="width: 12rem;">
            <img class="card-img-top" src="/img/marketing.jpg" alt="Card image cap" height="120px">
            <div class="card-body">
              <p class="card-text text-center">Marketing</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="<?= base_url(); ?>/magang/studio" class="text-muted texthitam">
          <div class="card animmenu" style="width: 12rem;">
            <img class="card-img-top" src="/img/studio.jpg" alt="Card image cap" height="120px">
            <div class="card-body">
              <p class="card-text text-center">Studio</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="<?= base_url(); ?>/magang/asdos" class="text-muted texthitam">
          <div class="card animmenu" style="width: 12rem;">
            <img class="card-img-top" src="/img/asisten_dosen.jpg" alt="Card image cap" height="120px">
            <div class="card-body">
              <p class="card-text text-center">Asisten Dosen</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- semua magang -->
  <div class="container mt-5 mb-3">
    <div class="row bghijau bgradius">
      <h4 class="textputih mt-4 text-center">Semua Kegiatan Magang</h4>
      <div class="row mt-3 d-flex justify-content-center align-items-center mb-3">
        <?php foreach ($magang as $row) : ?>
          <div class="col-sm-6 mt-3">
            <div class="card w-80">
              <div class="card-body">
                <a href="#" class="text-muted textputih">
                  <h5 class="card-title"><?= $row['nama']; ?></h5>
                </a>
                <p class="card-text"> <?= $row['deskripsi']; ?>
                  <br> Oleh <?= $row['penyelenggara']; ?>
                </p>
                <p class="card-text"> <?= $row['poin']; ?> JSDP</p>
              </div>
            </div>
          </div>
          <br>
        <?php endforeach; ?>
      </div>
      <br>
    </div>
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