<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container-xxl mt-5">
  <!-- acara panti -->
  <div id="acara" class="row p-4">
    <div class="col-xl-12">
      <p class="h1 text-light d-inline" data-aos="fade-up" data-aos-delay="100">Acara IPHI & Panti</p>
      <form action="" method="post">
        <div class="input-group mb-3" data-aos="fade-up" data-aos-delay="100">
          <input type="text" class="form-control" placeholder="Keyword Yang ingin di cari">
          <button class="btn btn-secondary" type="button" id="button-addon2">Cari Keyword</button>
        </div>
      </form>
    </div>
    <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
      <div class="card">
        <img src="/img/default.webp" data-aos="fade-up" data-aos-delay="200" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="/kegiatan/" class="btn btn-light">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
      <div class="card">
        <img src="/img/default.webp" data-aos="fade-up" data-aos-delay="200" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-light">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-xl-4 mb-3" data-aos="fade-up" data-aos-delay="150">
      <div class="card">
        <img src="/img/default.webp" data-aos="fade-up" data-aos-delay="200" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-light">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end acara panti -->
</div>
<?= $this->endSection(); ?>