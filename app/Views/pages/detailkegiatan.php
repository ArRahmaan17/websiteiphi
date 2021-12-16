<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5" data-aos="fade-up" data-aos-delay="1000">
  <p class="h3">Acara IPHI Judul</p>
  <div class="card">
    <img src="/img/default.webp" class="img-fluid">
    <div class="card-body">
      <p class="card-text d-inline-block">Diposting Oleh:</p>
      <p class="card-text d-inline-block">Terakhir Diupdate:</p>
      <p class=" card-text d-block">Isi</p>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>