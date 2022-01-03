<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css">
  <title><?= $title ?> | IPHI KARANGANYAR</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/"><img title="Logo IPHI Kabupaten Karangnayar" src="/img/logo.webp" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end bg-transparent align-middle" id="navbarNav">
        <?php if (logged_in()) : ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link fw-bold text-center text-light" data-aos="fade-down" href="admin/tamanindah" title="Daftar Taman Indah">Taman Indah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold text-center text-light" data-aos="fade-down" href="admin/kegiatan" title="Kegiatan IPHI">Kegiatan IPHI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold text-center text-light" data-aos="fade-down" href="admin/pengurus" title="Pengurus IPHI">Pengurus IPHI</a>
            </li>
          <?php else : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link fw-bold text-center text-light" data-aos="fade-down" href="/tamanindah" title="Daftar Taman Indah">Taman Indah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-center text-light" data-aos="fade-down" href="/kegiatan" title="Kegiatan IPHI">Kegiatan IPHI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-center text-light" data-aos="fade-down" href="/pengurus" title="Pengurus IPHI">Pengurus IPHI</a>
              </li>
            </ul>
          <?php endif ?>
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
            <h3 class="lead m-2 text-light">IPHI Kab. Karanganyar</h3>
          </div>
          <div class="m-2">
            <ul class="list-unstyled medium text-light">
              <li>089XXXXXXXXX</li>
              <li>089XXXXXXXXX</li>
              <li>089XXXXXXXXX</li>
              <li>089XXXXXXXXX</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="lead m-2 text-light">
            Sosial Media
          </div>
          <div class="sosialmedia nav-link">
            <ul class="list-unstyled medium  ">
              <li>
                <a class="text-decoration-none fw-bold text-light" href="https://www.instagram.com/iphikabupatenkaranganyar/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg>
                  <i>&nbsp;Instagram</i>
                </a>
              </li>
            </ul>
            <ul class="list-unstyled medium">
              <li>
                <a class="text-decoration-none fw-bold text-light" href="https://www.facebook.com/IPHIKabKaranganyar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                  <i>&nbsp;Facebook</i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-lg-4">
          <div class="lead m-2 text-light">
            Lokasi Kantor
          </div>
          <div class="Lokasi nav-link">
            <ul class="list-unstyled medium">
              <li>
                <iframe class="card text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118432.92532745835!2d110.93216411555852!3d-7.516030946504911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2276223d2c0d%3A0xd03b1bd7e66b8565!2sIphi%20Kab%20Karanganyar!5e0!3m2!1sid!2sid!4v1640320250119!5m2!1sid!2sid" width="350" height="200" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <div class="copyright medium text-light">
            &copy; Rahmaan.
          </div>
        </div>
      </div>
    </div>
    <!-- end Footer -->
    <?= $this->renderSection('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <?= $this->renderSection('script'); ?>
</body>

</html>