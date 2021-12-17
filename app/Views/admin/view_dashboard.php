<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>LAGA Mahasiswa - Dashboard Admin</title>

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
        <a class="nav-link px-3" href="<?= base_url(); ?>/admin/logout">Log out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>/admin/dashboard">
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
              <a class="nav-link" href="<?= base_url(); ?>/admin/managelomba">
                <span data-feather="award"></span>
                Manage Lomba
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <h2 class="mt-4">Welcome, Administrator!</h2>
        <br>
        <a style="color: white; text-decoration: none;" class="btn rounded btn-info" href="<?= base_url(); ?>/">Lihat Website</a>
        <br>


        <br>
        <div class="row">
          <div class="col">
            <a href="<?= base_url(); ?>/magang/keuangan" class="text-muted texthitam">
              <div class="card animmenu" style="width: 18rem;">
                <img class="card-img-top" src="/img/users.svg" alt="Card image cap" height="120px">
                <div class="card-body">
                  <p class="card-text text-center">Daftar User</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col mx-1">
            <a href="<?= base_url(); ?>/magang/ict" class="text-muted texthitam">
              <div class="card animmenu" style="width: 18rem;">
                <img class="card-img-top" src="/img/archive.svg" alt="Card image cap" height="120px">
                <div class="card-body">
                  <p class="card-text text-center">Manage Magang</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="<?= base_url(); ?>/magang/marketing" class="text-muted texthitam">
              <div class="card animmenu" style="width: 18rem;">
                <img class="card-img-top" src="/img/award.svg" alt="Card image cap" height="120px">
                <div class="card-body" style="text-decoration: none;">
                  <p class=" card-text text-center">Manage Lomba</p>
                </div>
              </div>
            </a>
          </div>
        </div>
    </div>
    <br>
  </div>
  </main>
  </div>
  </div>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
</body>

</html>