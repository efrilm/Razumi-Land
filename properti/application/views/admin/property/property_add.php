<div class="row">
    <?= form_open_multipart('a/add-property') ?>
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
                        <input type="text" class="form-control m-b-md" name="property_name" placeholder="<?= plang('Property Name') ?>" value="<?= set_value('property_name') ?>">
                        <small class="text-danger"><?= form_error('property_name') ?></small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Starting from price') ?></label>
                        <input type="number" class="form-control m-b-md" name="property_price" placeholder="<?= plang('Starting from price') ?>" value="<?= set_value('property_price') ?>">
                        <small class="text-danger"><?= form_error('property_price') ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Property Description') ?></label>
                        <textarea name="property_description" class="form-control m-b-md"><?= set_value('property_description') ?></textarea>
                        <small class="text-danger"><?= form_error('property_description') ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Property Thumbnail') ?></label>
                        <input type="file" class="form-control preview_image m-b-md" name="property_thumbnail">
                        <img class="image_load" src="<?= base_url() ?>/assets/images/other/no_image.png" width="100" alt="">
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
                        <textarea name="address" class="form-control m-b-md"><?= set_value('address') ?></textarea>
                        <small class="text-danger"><?= form_error('address') ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('City') ?></label>
                        <select name="city" class="form-select m-b-md" id="">
                            <option value=""><?= plang('Choose') ?></option>
                            <?php foreach ($city as $key => $v) { ?>
                                <option value="<?= $v->id_city ?>"><?= $v->city_name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Postal Code') ?></label>
                        <input type="number" class="form-control m-b-md" name="postal_code" placeholder="<?= plang('Postal Code') ?>" value="<?= set_value('postal_code') ?>">
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
                        <input type="number" class="form-control m-b-md" name="number_of_bedroom" placeholder="<?= plang('Number of Bedroom') ?>" value="<?= set_value('number_of_bedroom') ?>">

                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Bathroom') ?></label>
                        <input type="number" class="form-control m-b-md" name="number_of_bathroom" placeholder="<?= plang('Number of Bathroom') ?>" value="<?= set_value('number_of_bathroom') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Carport') ?></label>
                        <input type="number" class="form-control m-b-md" name="number_of_carport" placeholder="<?= plang('Number of Carport') ?>" value="<?= set_value('number_of_carport') ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- end Property Info -->

        <!-- Seo -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><?= plang('Seo') ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Seo Keywords') ?></label>
                        <textarea name="seo_keyword" class="form-control m-b-md"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Seo Descriptions') ?></label>
                        <textarea name="seo_description" class="form-control m-b-md"></textarea>
                    </div>
                </div>
                <?php $user = $this->user->getUser($this->session->userdata('user_id'))->row(); ?>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label"><?= plang('Seo Author') ?></label>
                        <input type="text" name="seo_author" class="form-control m-b-md" value="<?= $user->first_name ?> <?= $user->last_name ?>" readonly>
                    </div>
                </div>

            </div>
        </div>
        <!-- end seo -->

        <!-- Type -->
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    <h5 class="card-title"><?= plang('Property Type') ?></h5>
                </div>
                <div class="float-end">
                    <div id="btn-tambah-form" class="btn btn-success"><?= plang('Add Again') ?></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Type Name') ?></label>
                        <input type="text" class="form-control m-b-md" name="type_name[]" placeholder="<?= plang('Type Name') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Building Area') ?></label>
                        <input type="number" class="form-control m-b-md" name="building_area[]" placeholder="<?= plang('Building Area') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label"><?= plang('Type Price') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_price[]" placeholder="<?= plang('Type Price') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Surface Area') ?></label>
                        <input type="text" class="form-control m-b-md" name="surface_area[]" placeholder="<?= plang('Surface Area') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Bedroom') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_number_of_bedroom[]" placeholder="<?= plang('Number of Bedroom') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Bathroom') ?></label>
                        <input type="text" class="form-control m-b-md" name="type_number_of_bathroom[]" placeholder="<?= plang('Number of Bathroom') ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Number of Carport') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_number_of_carport[]" placeholder="<?= plang('Number of Carport') ?>">
                    </div>
                </div>
                <div id="insert-form"></div>
            </div>
        </div>
        <!-- end type -->
        <div class="float-end">
            <button type="submit" class="btn btn-primary"><?= plang('Add Property') ?></button>
        </div>
    </div>
    <?= form_close() ?>
    <input type="hidden" id="jumlah-form" value="1">
</div>