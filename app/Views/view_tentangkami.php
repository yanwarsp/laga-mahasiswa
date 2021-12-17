<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/styles.css">

  <title>Detail Magang ICT</title>
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
        <?php if (session()->get('logged_in')) : ?>
          <li class="nav-item">
            <a class="nav-link menupage mx-5" href="<?= base_url(); ?>/magang">Magang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menupage mx-5" href="<?= base_url(); ?>/lomba">Lomba</a>
          </li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link menupage-active mx-5" href="<?= base_url(); ?>/about">Tentang Kami</a>
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
  <div class="container">
    <br>
    <h2 class="text-center">TENTANG KAMI</h2>
  </div>
  <br> <br>
  <div class="row">
    <div class="col-sm-4">
      <div class="card w-80">
        <img class="mx-3" src="/img/logo3.png" alt="LAGA Mahasiswa">
      </div>
    </div>

    <div class="col-sm-8" style="background-color:#FFFFFF">
      <h3 class="text-center"><br>Latar Belakang LAGA Mahasiswa</h3>
      <br>
      <p class="text-justify">Menjadi mahasiswa yang aktif tentu sangatlah menguntungkan
        bagi semua orang yang berada di kalangan universitas, selain
        dapat memperbanyak pengetahuan, memperdalam skill, baik itu
        hardskill dan softskill, mendapatkan banyak relasi, dan
        memperbanyak sertifikat tentu akan sangat berguna baik itu di
        masa saat ini ataupun masa depan. Mahasiswa Universitas
        Pembangunan Jaya (UPJ) adalah kewajiban, guna untuk dapat
        lulus dari poin Jaya Softskill Development Program (JSDP)
        ataupun mendorong diri sendiri agar dapat melampaui batas
        dalam mengikuti kegiatan kemahasiswaan yang dapat menambah
        portofolio. Pada saat ini mahasiswa UPJ masih belum mendapatkan
        informasi secara merata terkait kegiatan kemahasiswaan khususnya
        seperti magang, projek, dan lomba. Mahasiswa juga belum bisa
        mengakses secara efektif mulai dari mendapatkan informasinya
        ataupun bagaimana cara bergabung pada kegiatan tersebut.
        Selain itu, saat ini bagi dosen dan staf UPJ pun terkadang masih
        kesulitan untuk mencari mahasiswa untuk bergabung pada
        kegiatan mereka karena menyebarkan informasi masih secara
        konvensional.
      </p> <br>       

      <div class="container">
        <div class="row">
          <div class="col-sm">
             <img src="img/profil_default.png" alt="" height="250px" />   
          </div>
          <div class="col-sm">
             <img src="img/profil_default.png" alt="" height="250px" />   
          </div>
          <div class="col-sm">
              <img src="img/profil_default.png" alt="" height="250px" />   
          </div>
        </div>
      </div>  
      
      <div class="col-sm-6">
        <p>
                Saat ini kreativitas menjadi kata kunci penting untuk memastikan 
          sumber daya manusia yang berkualiatas. Para Mahasiswa saat ini
          harus disiapkan menjadi pembelajar sejati yang terampil, ulet, dan
          mampu beradaptasi dengan lingkungannya. Untuk itu LAGA
          Mahasiswa diharapkan sekali dapat membantu teman-teman 
          mahasiswa Universitas Pembangunan Jaya dalam memaksimalkan
          Kegiatan kemahasiswaan. 

          Semua Kegiatan yang ada di LAGA Mahasiswa tentunya bias 
          diikuti oleh seluruh Mahasiswa aktif Universitas Pembangunan Jaya.
          Untuk itu LAGA Mahasiswa meluncurkan banyak sekali penawaran
          dari Kegiatan kemahasiswaan di UPJ sendiri untuk menambah
          pengalaman tekan-teman semua. Ayo kita tumbuh dan berkem-
          bang Bersama menjadi manusia Jaya.
        
      </div>
      
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