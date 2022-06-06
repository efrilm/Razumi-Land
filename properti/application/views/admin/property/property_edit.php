<div class="row">
    <?= form_open_multipart('a/edit-property/' . $property->id_property) ?>
    <div class="col">
        <!-- Property -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><?= plang('Property') ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Property Name') ?></label>
                        <input type="text" class="form-control m-b-md" name="property_name" placeholder="<?= plang('Property Name') ?>" value="<?= $property->property_name ?>">
                        <small class="text-danger"><?= form_error('property_name') ?></small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Starting from price') ?></label>
                        <input type="number" class="form-control m-b-md" name="property_price" placeholder="<?= plang('Starting from price') ?>" value="<?= $property->property_price ?>">
                        <small class="text-danger"><?= form_error('property_price') ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Property Description') ?></label>
                        <textarea name="property_description" class="form-control m-b-md"><?= $property->property_description ?></textarea>
                        <small class="text-danger"><?= form_error('property_description') ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Property Thumbnail') ?></label>
                        <input type="file" class="form-control preview_image m-b-md" name="property_thumbnail">
                        <img class="image_load" src="<?= base_url() ?>/assets/images/property/<?= $property->property_thumbnail ?>" width="100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Property  -->

        <!-- Location -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><?= plang('Location') ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Address') ?></label>
                        <textarea name="address" class="form-control m-b-md"><?= $property->property_address ?></textarea>
                        <small class="text-danger"><?= form_error('address') ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('City') ?></label>
                        <select name="city" class="form-select m-b-md" id="">
                            <option value="<?= $property->city_id ?>"><?= $property->city_name ?></option>
                            <?php foreach ($city as $key => $v) { ?>
                                <option value="<?= $v->id_city ?>"><?= $v->city_name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Postal Code') ?></label>
                        <input type="number" class="form-control m-b-md" name="postal_code" placeholder="<?= plang('Postal Code') ?>" value="<?= $property->property_postal_code ?>">
                        <small class="text-danger"><?= form_error('postal_code') ?></small>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Location -->

        <!-- Property Info -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><?= plang('Property Info') ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Bedroom') ?></label>
                        <input type="number" class="form-control m-b-md" name="number_of_bedroom" placeholder="<?= plang('Number of Bedroom') ?>" value="<?= $property->number_of_bedroom ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Bathroom') ?></label>
                        <input type="number" class="form-control m-b-md" name="number_of_bathroom" placeholder="<?= plang('Number of Bathroom') ?>" value="<?= $property->number_of_bathroom ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Carport') ?></label>
                        <input type="number" class="form-control m-b-md" name="number_of_carport" placeholder="<?= plang('Number of Carport') ?>" value="<?= $property->number_of_carport ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- end Property Info -->

        <div class="row">
            <div class="col">
                <div class="float-end">
                    <button type="submit" class="btn btn-primary"><?= plang('Edit') ?></button>
                </div>
            </div>
        </div>
    </div>