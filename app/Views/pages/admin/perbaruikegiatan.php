<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 mb-5">
      <form autocomplete="off" action="" method="POST">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Kegiatan</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Foto Thumbnails</label>
          <div class="col-sm-12">
            <input type="file" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="isikegiatan" class="form-label">Isi Kegiatan</label>
          <div class="col-sm-12">
            <textarea class="form-control" id="isikegiatan"></textarea>
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