<?= form_open('admin/property/processEditType/' . $id) ?>
<div class="row">
    <div class="col">
        <div class="card m-t-md">
            <div class="card-body">
                <input type="hidden" name="idProperty" value="<?= $type->property_id ?>" id="">
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Type Name') ?></label>
                        <input type="text" class="form-control m-b-md" name="type_name" value="<?= $type->type_name ?>" placeholder="<?= plang('Type Name') ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Type Price') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_price" value="<?= $type->type_price ?>" placeholder="<?= plang('Type Price') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Building Area') ?></label>
                        <input type="number" class="form-control m-b-md" name="building_area" value="<?= $type->building_area ?>" placeholder="<?= plang('Building Area') ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Surface Area') ?></label>
                        <input type="number" class="form-control m-b-md" name="surface_area" value="<?= $type->surface_area ?>" placeholder="<?= plang('Surface Area') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Number of Bedroom') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_number_of_bedroom" value="<?= $type->type_number_of_bedroom ?>" placeholder="<?= plang('Number of Bedroom') ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Number of Bathroom') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_number_of_bathroom" value="<?= $type->type_number_of_bathroom ?>" placeholder="<?= plang('Number of Bathroom') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Number of Carport') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_number_of_carport" value="<?= $type->type_number_of_carport ?>" placeholder="<?= plang('Number of Carport') ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="float-end">
            <button type="submit" class="btn btn-primary"><?= plang('Edit') ?></button>
        </div>
    </div>
</div>
<?= form_close() ?>