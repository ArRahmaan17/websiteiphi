<?= $this->extend('/layouts/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 mb-5">
      <form autocomplete="off" action="" method="POST">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-12">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        <button type="submit" class="btn btn-light">Perbarui Data</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>