<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 mb-5">
      <form autocomplete="off" enctype="multipart/form-data" action="/admin/kegiatan/update/<?= $data['id'] ?>" method="POST">
        <? csrf_field() ?>
        <input type="text" name="slug" value="<?= $data['slug'] ?>">
        <input type="text" name="fotolama" value="<?= $data['foto'] ?>">
        <div class="mb-3">
          <label for="judul" class="form-label text-light">Judul Kegiatan</label>
          <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" autofocus id="judul" value="<?= (old('judul')) ? old('judul') : $data['judul'] ?>" name="judul">
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            <?= $validation->getError('judul'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="youtube" class="form-label text-light">Link Youtube Kegiatan</label>
          <input type="text" class="form-control <?= ($validation->hasError('youtube')) ? 'is-invalid' : ''; ?>" id="youtube" value="<?= (old('youtube')) ? old('youtube') : $data['video'] ?>" name="youtube">
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            <?= $validation->getError('youtube'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="isi" class="form-label text-light">Isi Kegiatan</label>
          <textarea class="form-control <?= ($validation->hasError('isi')) ? 'is-invalid' : ''; ?>" name="isi" id="isi" style="height: 300px"><?= (old('isi')) ? old('isi') : $data['isi'] ?></textarea>
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            <?= $validation->getError('isi'); ?>.
          </div>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label text-light">Foto thumbnails : <?= (old('foto')) ? old('foto') : $data['foto'] ?> </label>
          <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" name="foto" type="file" id="foto" value="<?= (old('foto')) ? old('foto') : $data['foto'] ?>">
          <div id=" validationServerUsernameFeedback" class="invalid-feedback">
            <?= $validation->getError('foto'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/balloon-block/ckeditor.js"></script>
<style>
  .ck-editor__editable_inline {
    min-height: 50vh;
  }
</style>
<script>
  BalloonEditor
    .create(document.querySelector('#isi'))
    .catch(error => {
      console.error(error);
    });
</script>
<!-- <?= $this->endSection(); ?> -->