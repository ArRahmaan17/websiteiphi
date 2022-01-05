<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<?php if (logged_in()) : ?>
  <?= $this->include('admin/detailKegiatan'); ?>
<?php else : ?>
  <div class="container mb-5" data-aos="fade-up" data-aos-delay="1000">
    <p class="h3 text-capitalize text-light">Acara IPHI | <?= $data['judul'] ?></p>
    <div class="card">
      <div class="card-header text-center">
        <iframe width="560" height="315" src="<?= $data['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="card-body">
        <p class="h6 text-light">Terakhir Diupdate: <?= $data['updated_at'] ?> Oleh: <?= $data['penulis'] ?> </p>
        <p class="card-text text-light"><?= $data['isi'] ?></p>
      </div>
    </div>
  </div>
<?php endif ?>
<?= $this->endSection(); ?>