<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container-xxl mt-5">
  <!-- acara panti -->
  <div id="acara" class="row p-4">
    <div class="col-xl-12">
      <p class="h1 text-light d-inline" data-aos="fade-up" data-aos-delay="100">Acara IPHI</p>
      <div class="d-flex justify-content-end">
        <form action="" class="m-1" method="post">
          <div class="input-group" data-aos="fade-up" data-aos-delay="100">
            <input type="text" class="form-control" placeholder="Cari Keyword">
            <button class="btn btn-secondary" type="button" id="button-addon2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg>
            </button>
          </div>
        </form>
        <a class="btn btn-secondary d-inline-block m-1" data-aos="fade-up" data-aos-delay="100" href="/admin/buatkegiatan">Buat Kegiatan</a>
      </div>
    </div>
    <?php foreach ($data as $k) : ?>
      <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
        <div class="card">
          <img src="/img/<?= $k['foto'] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-light text-capitalize">Kegiatan <?= $k['judul'] ?></h5>
            <p class="card-text text-light"><?= $k['excerpt'] ?></p>
            <a href="/admin/kegiatan/<?= $k['slug'] ?>" class="btn btn-success text-capitalize">Detail Kegiatan <?= $k['judul'] ?></a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    <?= $pager->links('kegiatan', 'custome_pager') ?>
  </div>
  <!-- end acara panti -->
</div>
<?= $this->endSection(); ?>