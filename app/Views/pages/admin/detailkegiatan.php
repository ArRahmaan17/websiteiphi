<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5" data-aos="fade-up" data-aos-delay="1000">
  <div class="d-flex">
    <p class="h3 text-capitalize text-light">Acara IPHI | <?= $data['judul'] ?></p>
  </div>
  <div class="card">
    <div id="cardupdate" class="card-header text-center">
      <iframe class="container" src="<?= $data['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div id="carddelete" class="card-body">
      <p class="h6 text-light">Terakhir Diupdate: <?= $data['updated_at'] ?> Oleh: <?= $data['penulis'] ?> </p>
      <p class="card-text text-light"><?= $data['isi'] ?></p>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
  console.log("Javascript jalan");
  setTimeout(() => {
    alert("Untuk Update Pengajian Click disamping Video Youtube\nUntuk Delete Pengajian Double Click disamping Judul Kegiatan");
  }, 5000);
  document.getElementById("cardupdate").onclick = function() {
    if (confirm('apakah anda yakin ingin mengedit pengajian <?= $data['judul'] ?> ') == true) {
      location.href = "<?= base_url() ?>/admin/perbaruikegiatan/<?= $data['slug'] ?>";
    };
  };
  document.getElementById("carddelete").ondblclick = function() {
    if (confirm('apakah anda yakin ingin menghapus pengajian <?= $data['judul'] ?> ') == true) {
      location.href = "<?= base_url() ?>/admin/perbaruikegiatan/<?= $data['slug'] ?>";
    };
  };
</script>
<?= $this->endSection(); ?>