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
	<div class="container mb-5 mt-5">
		<div class="row gutters">
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
				<div class="card h-100">
					<div class="card-body">
						<div class="account-settings">
							<div class="user-profile">
								<div class="user-avatar">
									<img src="/img/profil_default.png" alt="" height="230px" />
								</div> <br>
								<h4 class="user-name text-center">Melinda Rahayu</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
				<div class="card h-100">
					<div class="card-body">
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<h2 class="mt-3 mb-3" style="color: #26b2ab;">Edit Profile</h2> <br>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="fullNama">Nama</label>
									<input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap">
									<br>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="website">E-mail</label>
									<input type="text" class="form-control" id="email" placeholder="E-mail"> <br>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="jurusan">Jurusan</label>
									<input type="text" class="form-control" id="jurusan" placeholder="Jurusan"><br>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="ptemptTanggalLahir">Tempat Tanggal Lahir</label>
									<input type="text" class="form-control" id="ttgl" placeholder="Tempat Tanggal Lahir"><br>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="website">Kewarganegaraan</label>
									<input type="text" class="form-control" id="kewarganegaraan" placeholder="Kewarganegaraan"><br>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="website">Agama</label>
									<input type="text" class="form-control" id="agama" placeholder="Agama"><br>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="form-group">
									<label for="website">Alamat</label>
									<input type="text" class="form-control" id="alamat" placeholder="Alamat"><br>
								</div>
							</div>
						</div>

						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="text-right">
									<br>
									<br>
									<a class="btn rounded-pill btn-warning mb-2" style="color: white; text-decoration: none;" href="<?= base_url(); ?>/profil">Kembali</a>
									<button class="btn rounded-pill button1 mb-2" type="submit">Simpan</button>
								</div>
							</div>
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