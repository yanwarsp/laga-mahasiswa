<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/styles.css">

    <title>Beranda</title>
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
    <div class="jumbotron">
        <br>
        <h1 class="text-center mb-5 mt-5" style="color: #26b2ab;">Profil Saya</h1>
    </div>
    <br>

    <div class="container emp-profile mb-5">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="img/profil_default.png" alt="" height="250px" />
                    </div>
                    <div class="profile-work">
                        <br>
                        <h3>Melinda Rahayu </h3> <br>
                        <a class="btn rounded-pill button1" href="<?= base_url(); ?>/login/logout">LOG OUT</a>
                        <a class="btn rounded-pill btn-warning" style="color: white; text-decoration: none;" href="<?= base_url(); ?>/profil/edit">EDIT PROFIL</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-head">
                        <h4>
                            Mahasiswa Universitas Pembangunan Jaya
                        </h4>
                        <br>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>MelindaRahayu@student.upj.ac.id</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>NIM</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>2019071053</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jurusan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Informatika</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>11 November 2001</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kewarganegaraan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Indonesia</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Tidak ada</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Gold House Jakarta</p>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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