<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container-xxl">
  <!-- acara panti -->
  <div id="acara" class="row p-4">
    <div class="col-xl-12">
      <p class="h1 text-light d-inline">Acara IPHI</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword" placeholder="Keyword Yang ingin di cari">
          <button class="btn btn-secondary" type="button" id="button-addon2">Cari Keyword</button>
        </div>
      </form>
    </div>
    <?php foreach ($data as $k) : ?>
      <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
        <div class="card">
          <img src="/img/<?= $k['foto'] ?>" data-aos="fade-up" data-aos-delay="200" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-light"><?= $k['judul'] ?></h5>
            <p class="card-text text-light"><?= $k['excerpt'] ?></p>
            <a href="/kegiatan/<?= $k['slug'] ?>" class="btn btn-light">Detail <?= $k['judul'] ?></a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    <!-- end acara panti -->
  </div>
  <?= $this->endSection(); ?>