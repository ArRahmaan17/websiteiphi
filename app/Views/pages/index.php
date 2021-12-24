<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="g-col-12 text-center text-light">
      <img src="img/ketua.webp" data-aos="zoom-in-down" data-aos-delay="500" class="img rounded-circle shadow" width="250">
      <p class="h1" data-aos="fade-right" data-aos-delay="550">H. Juliyatmono, MM</p>
      <p class="h5" data-aos="fade-right" data-aos-delay="600">Ketua IPHI Kabupaten KARANGANYAR</p>
    </div>
  </div>
  <div id="fisimisi" class="row">
    <div class="col-sm-12 col-xl-6 mt-1" data-aos="fade-up" data-aos-delay="1000">
      <div class="card shadow text-light">
        <div class="card-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odio sapiente sequi ducimus omnis necessitatibus at illum minus laudantium, vel eaque nostrum unde, eligendi inventore quibusdam voluptatum, provident quasi culpa!
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6 mt-1" data-aos="fade-up" data-aos-delay="1000">
      <div class="card shadow text-light">
        <div class="card-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit odio sapiente sequi ducimus omnis necessitatibus at illum minus laudantium, vel eaque nostrum unde, eligendi inventore quibusdam voluptatum, provident quasi culpa!
        </div>
      </div>
    </div>
  </div>
  <div id="acara" class="row p-4 mt-5">
    <p class="h1 text-light" data-aos="fade-down" data-aos-delay="100">Acara IPHI</p>
    <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
      <div class="card shadow text-light ">
        <img src="/img/default.webp" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Judul Postingan</h5>
          <p class="card-text">Isi Postingan</p>
          <a href="#" class="btn btn-light">Detail Judul</a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
      <div class="card shadow text-light">
        <img src="/img/default.webp" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Judul Postingan</h5>
          <p class="card-text">Isi Postingan</p>
          <a href="#" class="btn btn-light">Detail Judul</a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
      <div class="card shadow text-light">
        <img src="/img/default.webp" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Judul Postingan</h5>
          <p class="card-text">Isi Postingan</p>
          <a href="#" class="btn btn-light">Detail Judul</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- Gallery -->
  <div id="gallery" class="row" data-aos="ease-in" data-aos-delay="500">
    <p class="h3 text-center text-light">OUR GALLERY</p>
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img src="/img/gallery1.JPG" class="w-100 shadow rounded mb-4" alt="Boat on Calm Water" />
      <img src="/img/default.webp" class="w-100 shadow rounded mb-4" alt="Wintry Mountain Landscape" />
    </div>
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img src="/img/gallery1.JPG" class="w-100 shadow rounded mb-4" alt="Boat on Calm Water" />
      <img src="/img/default.webp" class="w-100 shadow rounded mb-4" alt="Wintry Mountain Landscape" />
    </div>
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img src="/img/gallery1.JPG" class="w-100 shadow rounded mb-4" alt="Boat on Calm Water" />
      <img src="/img/default.webp" class="w-100 shadow rounded mb-4" alt="Wintry Mountain Landscape" />
    </div>
  </div>
  <!-- Gallery -->
</div>
<?= $this->endSection(); ?>