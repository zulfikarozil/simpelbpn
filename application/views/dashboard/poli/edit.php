<div class="col-8">
    <div class="card m-b-30">
        <div class="card-body">

            <h4 class="mt-0 header-title">Edit Data Poli</h4>

            <form class="needs-validation" novalidate method="POST" action="<?= site_url('poli/update') ?>">
                <input type="hidden" name="id" id="id" value="<?= $poli->id_poli ?>">
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Nama Poli</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="nama" id="nama" type="text" value="<?= $poli->nama ?>" id="example-text-input" placeholder="Nama" required>
                        <div class="help-block"><?php echo form_error('nama'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="des" id="des" value="" cols="30" rows="10"><?= $poli->des ?></textarea>
                    </div>
                </div>
                <button class="btn btn-primary float-right ml-2" type="submit"><i class="fa fa-save"></i> Submit</button>
                <a class="btn btn-secondary float-right" href="<?= site_url('poli') ?>"><i class="fa fa-arrow-left"></i> Cancel</a>
            </form>
        </div>
    </div>
</div> <!-- end col -->