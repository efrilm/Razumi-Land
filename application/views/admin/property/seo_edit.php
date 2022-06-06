<?= form_open('admin/property/processEditSeo') ?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="id_seo" value="<?= $seo->id_seo ?>">
                <label class="form-label"><?= plang('Seo Keywords') ?></label>
                <textarea name="seo_keyword" class="form-control m-b-md"><?= $seo->seo_keywords ?></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label"><?= plang('Seo Description') ?></label>
                <textarea name="seo_description" class="form-control m-b-md"><?= $seo->seo_description ?></textarea>
            </div>
            <div class="col">
                <?php $user = $this->user->getUser($this->session->userdata('user_id'))->row(); ?>
                <label class="form-label"><?= plang('Seo Author') ?></label>
                <input type="text" class="form-control m-b-md" name="seo_author" value="<?= $user->first_name ?> <?= $user->last_name ?>" readonly>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="float-end">
            <button type="submit" class="btn btn-primary"><?= plang('Save') ?></button>
        </div>
    </div>
</div>

<?= form_close() ?>