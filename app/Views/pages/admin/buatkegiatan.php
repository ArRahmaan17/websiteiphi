<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <p class="display-2 text-white"><?= $title ?></p>
    <div class="col-xl-10 mb-5" data-aos='fade-in' data-aos-delay="500">
      <form autocomplete="off" action="/admin/kegiatan/savekegiatan" enctype="multipart/form-data" method="POST">
        <? csrf_field() ?>
        <div class="row mb-1">
          <label for="judul" class="col-sm-2 col-form-label text-white">Judul Kegiatan</label>
          <div class="col-sm-12">
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= old('judul') ?>" name="judul" id="judul">
            <div id="validationServerUsernameFeedback" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-1">
          <label for="foto" class="col-sm-2 col-form-label text-white">Foto Thumbnails</label>
          <div class="col-sm-12">
            <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" value="<?= old('foto') ?>" name="foto" id="foto">
            <div id="validationServerUsernameFeedback" data-aos='fade-down' data-aos-delay="600" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('foto'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-1">
          <label for="linkyoutube" class="col-sm-2 col-form-label text-white">Link Youtube</label>
          <div class="col-sm-12">
            <input type="text" class="form-control <?= ($validation->hasError('youtube')) ? 'is-invalid' : ''; ?>" value="<?= old('youtube') ?>" name="youtube" id="linkyoutube">
            <div id="validationServerUsernameFeedback" data-aos='fade-down' data-aos-delay="600" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('youtube'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-1">
          <label for="isikegiatan" class="form-label text-white">Isi Kegiatan</label>
          <div class="col-sm-12">
            <textarea class="form-control <?= ($validation->hasError('isi')) ? 'is-invalid' : ''; ?>" name="isi" id="isikegiatan"><?= old('isi') ?></textarea>
            <div id="validationServerUsernameFeedback" data-aos='fade-down' data-aos-delay="600" class="invalid-feedback text-capitalize fw-bold text-sm-center">
              <?= $validation->getError('isi'); ?>
            </div>
          </div>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-light">Tambah Kegiatan</button>
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