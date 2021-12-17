<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5" data-aos="fade-up" data-aos-delay="1000">
  <p class="h3 text-capitalize text-light">Acara IPHI | <?= $data['judul'] ?></p>
  <div class="card">
    <div class="card-header text-center">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/2ahTUSaLMJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="card-body">
      <p class="h3">Diposting Oleh: <?= $data['penulis'] ?> </p>
      <p class="h5">Terakhir Diupdate: <?= $data['updated_at'] ?></p>
      <p class="card-text"><?= $data['isi'] ?></p>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>