<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div id="kampanye" class="container-fluid">
    <div id="pengenalan" class="row">
      <div class="g-col-12 text-center">
        <img src="<?= base_url() ?>/img/ketua.webp" data-aos="zoom-in-down" data-aos-delay="500" class="img rounded-circle shadow align-middle" width="250">
        <p class="h1" data-aos="fade-right" data-aos-delay="550">Drs. H. Juliyatmono, MM</p>
        <p class="h5" data-aos="fade-right" data-aos-delay="600">Ketua IPHI Kabupaten KARANGANYAR</p>
      </div>
    </div>
    <div id="fisimisi" class="row mt-5">
      <div class="col-sm-12 col-xl-6 mt-1" data-aos="fade-up" data-aos-delay="1000">
        <div class="card shadow">
          <div class="card-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odio sapiente sequi ducimus omnis necessitatibus at illum minus laudantium, vel eaque nostrum unde, eligendi inventore quibusdam voluptatum, provident quasi culpa!
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-xl-6 mt-1" data-aos="fade-up" data-aos-delay="1000">
        <div class="card shadow">
          <div class="card-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odio sapiente sequi ducimus omnis necessitatibus at illum minus laudantium, vel eaque nostrum unde, eligendi inventore quibusdam voluptatum, provident quasi culpa!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <!-- acara -->
    <div id="acara" class="row mt-2">
      <p class="h1" data-aos="fade-down">Acara IPHI</p>
      <?php foreach ($kegiatan as $k) : ?>
        <div class="col-xl-4 mb-3" data-aos="fade-up">
          <div class="card shadow">
            <img src="<?= base_url() ?>/img/<?= $k['foto'] ?>" data-aos="fade-up" class="card-img-top">
            <div class="card-body">
              <p class="card-title h5"><?= $k['judul'] ?></p>
              <p class="card-text"><?= $k['excerpt'] ?></p>
              <a href="/detailkegiatan/<?= $k['slug'] ?>" class="btn btn-success">Detail Kegiatan <?= $k['judul'] ?></a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <!-- endacara -->
    <hr>
    <!-- Gallery -->
    <div id="gallery" class="row" data-aos="fade-up" data-aos-delay="500">
      <p class="h1">OUR GALLERY</p>
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img src="<?= base_url() ?>/img/gallery1.JPG" class="w-100 shadow rounded mb-4" />
        <img src="<?= base_url() ?>/img/default.webp" class="w-100 shadow rounded mb-4" />
      </div>
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img src="<?= base_url() ?>/img/gallery1.JPG" class="w-100 shadow rounded mb-4" />
        <img src="<?= base_url() ?>/img/default.webp" class="w-100 shadow rounded mb-4" />
      </div>
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img src="<?= base_url() ?>/img/gallery1.JPG" class="w-100 shadow rounded mb-4" />
        <img src="<?= base_url() ?>/img/default.webp" class="w-100 shadow rounded mb-4" />
      </div>
    </div>
    <!-- Gallery -->
  </div>
</div>
<?= $this->endSection(); ?>