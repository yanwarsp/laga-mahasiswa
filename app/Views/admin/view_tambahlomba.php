<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Admin LAGA Mahasiswa - List Users</title>

  <link rel="stylesheet" href="/css/dashboard.css">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

</head>

<body>

  <header class="navbar navbar-dark sticky-top bgnavadmin flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="/img/logo.png" alt="LAGA Mahasiswa" width="125px"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="<?= base_url(); ?>/admin/logout">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>/admin/dashboard">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>/admin/daftaruser">
                <span data-feather="users"></span>
                Daftar User
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>/admin/managemagang">
                <span data-feather="archive"></span>
                Manage Magang
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>/admin/managelomba">
                <span data-feather="award"></span>
                Manage Lomba
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container mb-5 mt-5">
          <div class="row gutters">
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
              <div class="card h-100">
                <div class="card-body">
                  <form action="<?= base_url(); ?>/admin/submitlomba" method="POST">
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2 class="mt-3 mb-3" style="color: #111111;">Tambah Perlombaan</h2> <br>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullNama">Nama Lomba</label>
                          <input type="text" class="form-control" id="namaLomba" name="nama" placeholder="Nama Perlombaan">
                          <br>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="website">Penyelenggara</label>
                          <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" placeholder="Penyelenggara"> <br>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="jurusan">Kelompok Lomba</label>
                          <input type="text" class="form-control" id="kelompokLomba" name="kelompok" placeholder="kelompok Lomba"><br>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="ptemptTanggalLahir">Hadiah Lomba</label>
                          <input type="text" class="form-control" id="hadiahLomba" name="hadiah" placeholder="Hadiah Lomba"><br>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="website">Reward Point JSDP</label>
                          <input type="text" class="form-control" id="poinJsdp" name="poin" placeholder="Point"><br>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="website">Kriteria</label>
                          <input type="text" class="form-control" id="kriteria" name="kriteria" placeholder="kriteria"><br>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="website">Deskripsi</label>
                          <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi"><br>
                        </div>
                      </div>
                    </div>


                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                          <br>
                          <br>
                          <a class="btn btn-danger mb-2" style="color: white; text-decoration: none;" href="<?= base_url(); ?>/admin/managelomba">Kembali</a>
                          <button class="btn btn-primary mb-2" type="submit">Simpan</button>
                        </div>
                      </div>
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
</body>

</html>