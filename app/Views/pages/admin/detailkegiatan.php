<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5" data-aos="fade-up" data-aos-delay="1000">
  <p class="h3">Acara IPHI Judul</p>
  <div class="card">
    <img src="/img/default.webp" class="img-fluid">
    <div class="card-body">
      <p class="h6 text-light">Terakhir Diupdate: <?= $data['updated_at'] ?> Oleh: <?= $data['penulis'] ?> </p>
      <p class="card-text text-light"><?= $data['isi'] ?></p>
    </div>
    <a href="" class="btn btn-primary">UPDATE</a>
    <a href="" class="btn btn-danger">DELETE</a>
  </div>
</div>
<?= $this->endSection(); ?>