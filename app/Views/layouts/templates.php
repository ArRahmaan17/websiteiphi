<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title><?= $title ?> | IPHI KARANGANYAR</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="/img/logo.webp" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-bold" href="/tamanindah" title="Daftar Taman Indah">Taman Indah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold " href="/kegiatan" title="Kegiatan IPHI">Kegiatan IPHI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold " href="/pengurus" title="Pengurus IPHI">Pengurus IPHI</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- content Website -->
  <?= $this->renderSection('content'); ?>
  <!-- end Content Website -->

  <!-- footer website -->
  <div id="footer" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5">
          <div class="lembaga d-flex">
            <img class="img-thumbnail bg-dark rounded-circle" width="40" height="40" src="/img/logo.webp">
            <h3 class="lead m-2 ">IPHI Kab. Karanganyar</h3>
          </div>
          <div class="m-2">
            <ul class="list-unstyled medium">
              <li>Kontak personal</li>
              <li>089XXXXXXXXX</li>
              <li>089XXXXXXXXX</li>
              <li>089XXXXXXXXX</li>
              <li>089XXXXXXXXX</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="lead m-2">
            Sosial Media
          </div>
          <div class="sosialmedia nav-link">
            <ul class="list-unstyled medium  ">
              <li><a class="text-decoration-none text-dark" href="https://github.com/ArRahmaan17"><i class="bi bi-github">&nbsp;ArRahmaan17</i></a></li>
            </ul>
            <ul class="list-unstyled medium">
              <li><a class="text-decoration-none text-dark" href="https://github.com/ArRahmaan17"><i class="bi bi-github">&nbsp;ArRahmaan17</i></a></li>
            </ul>
            <ul class="list-unstyled medium">
              <li><a class="text-decoration-none text-dark" href="https://github.com/ArRahmaan17"><i class="bi bi-github">&nbsp;ArRahmaan17</i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-lg-4">
          <div class="lead m-2">
            Lokasi Kantor
          </div>
          <div class="Lokasi nav-link">
            <ul class="list-unstyled medium">
              <li><i class="bi bi-geo-alt-fill text-dark">Jl. Lawu No.156, Bejen, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716</i></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <div class="copyright medium">
            &copy; Rahmaan.
          </div>
        </div>
      </div>
    </div>
    <!-- end Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <?= $this->renderSection('script'); ?>
</body>

</html>