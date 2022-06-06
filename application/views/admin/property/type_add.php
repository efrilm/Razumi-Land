<div class="row">
    <div class="col">
        <div class="float-end">
            <div class="btn btn-primary add-type"><?= plang('Add Again') ?></div>
        </div>
    </div>
</div>
<?= form_open('admin/property/processAddType') ?>
<div class="card m-t-md">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Type Name') ?></label>
                <input type="text" class="form-control m-b-md" name="type_name[]" placeholder="<?= plang('Type Name') ?>">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Type Price') ?></label>
                <input type="number" class="form-control m-b-md" name="type_price[]" placeholder="<?= plang('Type Price') ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Building Area') ?></label>
                <input type="number" class="form-control m-b-md" name="building_area[]" placeholder="<?= plang('Building Area') ?>">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Surface Area') ?></label>
                <input type="number" class="form-control m-b-md" name="surface_area[]" placeholder="<?= plang('Surface Area') ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Number of Bedroom') ?></label>
                <input type="number" class="form-control m-b-md" name="type_number_of_bedroom[]" placeholder="<?= plang('Number of Bedroom') ?>">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Number of Bathroom') ?></label>
                <input type="number" class="form-control m-b-md" name="type_number_of_bathroom[]" placeholder="<?= plang('Number of Bathroom') ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Number of Carport') ?></label>
                <input type="number" class="form-control m-b-md" name="type_number_of_carport[]" placeholder="<?= plang('Number of Carport') ?>">
            </div>
        </div>
    </div>
</div>

<div class="form-type"></div>

<div class="row">
    <div class="col">
        <div class="float-end">
            <button class="btn btn-primary"><?= plang('Save') ?></button>
        </div>
    </div>
</div>
<?= form_close() ?>

<input type="hidden" class="count-type" value="1">