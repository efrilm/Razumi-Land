<?= form_open_multipart('admin/property/processAddImages') ?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label class="form-label"><?= plang('Property Images') ?></label>
                <input type="file" class="form-control m-b-md" name="images[]" multiple>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="float-end">
            <input type="submit" name="upload" class="btn btn-primary" value="<?= plang('Save') ?>">
        </div>
    </div>
</div>
<?= form_close() ?>