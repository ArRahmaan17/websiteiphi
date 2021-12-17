<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5" data-aos="fade-up" data-aos-delay="1000">
  <p class="h3 text-capitalize text-light">Acara IPHI <?= $data['judul'] ?></p>
  <div class="card">
    <img src="/img/<?= $data['foto'] ?>" class="img-fluid">
    <div class="card-body">
      <p class="card-text">Diposting Oleh: <?= $data['penulis'] ?> </p>
      <p class="card-text">Terakhir Diupdate: <?= $data['updated_at'] ?></p>
      <p class=" card-text"><?= $data['isi'] ?></p>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>