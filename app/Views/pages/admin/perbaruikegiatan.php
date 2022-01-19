<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 mb-5">
      <form autocomplete="off" enctype="multipart/form-data" action="/admin/kegiatan/update/<?= $data['id'] ?>" method="POST">
        <? csrf_field() ?>
        <input type="text" value="<?= $data['id'] ?>">
        <input type="text" value="<?= $data['foto'] ?>">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Judul Kegiatan</label>
          <div class="col-sm-12">
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= $data['judul'] ?>" name="judul" id="inputEmail3">
            <div id="validationServerUsernameFeedback" data-aos='fade-down' data-aos-delay="600" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Link Youtube Kegiatan</label>
          <div class="col-sm-12">
            <input type="text" class="form-control <?= ($validation->hasError('video')) ? 'is-invalid' : ''; ?>" value="<?= $data['video'] ?>" name="video" id="inputEmail3">
            <div id="validationServerUsernameFeedback" data-aos='fade-down' data-aos-delay="600" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('video'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Foto Thumbnails : <?= $data['foto'] ?></label>
          <div class="col-sm-12">
            <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" value="<?= $data['foto'] ?>" name="foto" id="inputPassword3">
            <div id="validationServerUsernameFeedback" data-aos='fade-down' data-aos-delay="600" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('foto'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="isikegiatan" class="form-label fw-bold">Isi Kegiatan</label>
          <div class="col-sm-12">
            <textarea class="form-control text-dark <?= ($validation->hasError('isi')) ? 'is-invalid' : ''; ?>" name="isi" id="isikegiatan"><?= $data['isi'] ?></textarea>
            <div id="validationServerUsernameFeedback" data-aos='fade-down' data-aos-delay="600" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('isi'); ?>
            </div>
          </div>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-light">Perbarui Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
<style>
  .ck-editor__editable_inline {
    min-height: 50vh;
  }
</style>
<script>
  ClassicEditor.create(document.querySelector('#isikegiatan'));
</script>
<?= $this->endSection(); ?>