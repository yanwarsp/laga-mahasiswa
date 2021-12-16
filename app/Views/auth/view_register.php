<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/styles.css">

  <title>Login</title>
</head>

<body class="bodyimg">

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
          <a class="nav-link menupage mx-5" href="<?= base_url(); ?>/lomba">Lomba</a>
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
  <div class="container mt-5 mb-4">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5 my-5">
          <div class="card-header">
            <h2 class="text-center font-weight-light my-5 texthijau">Register</h2>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-6">
                  <div class="form-floating mb-4">
                    <input class="form-control" id="nama" type="text" placeholder="Nama Lengkap" />
                    <label for="nama">Nama Lengkap</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input class="form-control" id="nim" type="text" placeholder="NIM" />
                    <label for="nim">NIM</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input class="form-control" id="jurusan" type="text" placeholder="Jurusan" />
                    <label for="jurusan">Jurusan</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating mb-4">
                    <input class="form-control" id="email" type="email" placeholder="Email" />
                    <label for="email">Email UPJ</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input class="form-control" id="password" type="password" placeholder="Konfirmasi Password" />
                    <label for="password">Password</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input class="form-control" id="cpassword" type="password" placeholder="Password" />
                    <label for="cpassword">Konfirmasi Password</label>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <button class="button1 btn">Register</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center py-3">
            <div class="small">
              <a href="<?= base_url(); ?>/login" class="texthijau">Sudah punya akun ? Login</a>
            </div>
          </div>
        </div>
      </div>
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
          <a href="#" class="text-muted textputih">Yanwar</a>
          &middot;
          <a href="#" class="text-muted textputih">Zahra</a>
          &middot;
          <a href="#" class="text-muted textputih">Raflie</a>
        </div>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>