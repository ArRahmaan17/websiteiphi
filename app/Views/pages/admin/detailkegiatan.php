<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5" data-aos="fade-up" data-aos-delay="1000">
  <div class="d-flex">
    <p class="h3 text-capitalize text-light">Acara IPHI | <?= $data['judul'] ?></p>
  </div>
  <div id="cardpengajian" ondblclick="myFunction()" class="card">
    <div class="card-header text-center">
      <iframe width="560" height="315" src="<?= $data['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="card-body">
      <p class="h6 text-light">Terakhir Diupdate: <?= $data['updated_at'] ?> Oleh: <?= $data['penulis'] ?> </p>
      <p class="card-text text-light"><?= $data['isi'] ?></p>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script type="text/javascript">
  setTimeout(() => {
    alert("Click di samping youtube video untuk update konten");
  }, 5000);
  document.getElementById("cardpengajian").onclick = function() {
    if (confirm('apakah anda yakin ingin menghapus pengajian <?= $data['judul'] ?> ') == true) {
      location.href = "<?= base_url() ?>/admin/perbaruikegiatan/<?= $data['slug'] ?>";
    };
  };

  function myFunction() {
    if (confirm('apakah anda yakin ingin menghapus pengajian <?= $data['judul'] ?> ') == true) {
      location.href = "<?= base_url() ?>/admin/perbaruikegiatan/<?= $data['slug'] ?>";
    };
  }
</script>
<?= $this->endSection(); ?>