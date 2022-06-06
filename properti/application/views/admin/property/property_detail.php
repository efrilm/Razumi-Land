<?= $this->session->flashdata('message'); ?>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="<?= base_url() ?>/assets/images/property/<?= $property->property_thumbnail ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $property->property_name  ?>
                </h5>
                <p class="card-text"><?= $property->property_address ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="float-start">
                        <?= plang('Start from price') ?>
                    </div>
                    <div class="float-end">
                        IDR <?= number_format($property->property_price) ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="float-start">
                        <?= plang('City') ?>
                    </div>
                    <div class="float-end">
                        <?= $property->city_name ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="float-start">
                        <?= plang('Postal Code') ?>
                    </div>
                    <div class="float-end">
                        <?= $property->property_postal_code ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="float-start">
                        <?= plang('Number of Bedroom') ?>
                    </div>
                    <div class="float-end">
                        <?= $property->number_of_bedroom ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="float-start">
                        <?= plang('Number of Bathroom') ?>
                    </div>
                    <div class="float-end">
                        <?= $property->number_of_bathroom ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="float-start">
                        <?= plang('Number of Carport') ?>
                    </div>
                    <div class="float-end">
                        <?= $property->number_of_carport ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?= plang('Actions') ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <?php if ($property->is_active == 1) { ?>
                                    <button type="button" class="btn btn-primary w-100 mb-2 " data-bs-toggle="modal" data-bs-target="#deactive">
                                        <?= plang('Active') ?>
                                    </button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-warning w-100 mb-2 " data-bs-toggle="modal" data-bs-target="#active">
                                        <?= plang('Deactive') ?>
                                    </button>
                                <?php } ?>
                                <a href="<?= base_url('a/add-type/' . $property->id_property) ?>" class="btn btn-primary w-100 mb-2"><?= plang('Add Type Property') ?></a>
                            </div>
                            <div class="col-md-3">
                                <a href="<?= base_url('a/add-images/' . $property->id_property) ?>" class="btn btn-primary w-100 mb-2"><?= plang('Add Images') ?></a>
                                <a href="<?= base_url('a/edit-property/' . $property->id_property) ?>" class="btn btn-success w-100 mb-2"><?= plang('Edit') ?> <?= $property->property_name ?></a>
                            </div>
                            <div class="col-md-3">
                                <a href="<?= base_url('a/edit-seo/' . $property->id_property) ?>" class="btn btn-success w-100 mb-2"><?= plang('Edit Seo') ?></a>
                                <button type="button" class="btn btn-danger w-100 mb-2 " data-bs-toggle="modal" data-bs-target="#deleteProperty">
                                    <?= plang('Delete') ?> <?= $property->property_name ?>
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-danger w-100 mb-2 " data-bs-toggle="modal" data-bs-target="#deleteAllType">
                                    <?= plang('Delete All Type') ?>
                                </button>
                                <button type="button" class="btn btn-danger w-100 mb-2 " data-bs-toggle="modal" data-bs-target="#deleteAllGallery">
                                    <?= plang('Delete All Gallery') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <?= plang('Property Description') ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <?= $property->property_description ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?= plang('Property Galleries') ?></h5>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($gallery)) { ?>
                            <div class="example-container">
                                <div class="example-content">
                                    <div class="lightbox-example text-center">
                                        <div class="row">
                                            <?php foreach ($gallery as $key => $v) { ?>
                                                <div class="col-md-3">
                                                    <a data-fslightbox="gallery" href="<?= base_url() ?>assets/images/property/<?= $v->image_name ?>">
                                                        <img src="<?= base_url() ?>assets/images/property/<?= $v->image_name ?>" width="160" height="160">
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm mb-4" data-bs-toggle="modal" data-bs-target="#deleteImage<?= $v->id_gallery ?>">
                                                        <?= plang('Delete') ?>
                                                    </button>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="text-center">
                                <?= plang('No Images'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (empty($type)) { ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <?= plang('No Type') ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <?php
                foreach ($type as $key => $v) {
                ?>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"><?= $v->type_name ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="float-start">
                                        <?= plang('Start from price') ?>
                                    </div>
                                    <div class="float-end">
                                        IDR <?= number_format($v->type_price) ?>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="float-start">
                                        <?= plang('Building Area') ?>
                                    </div>
                                    <div class="float-end">
                                        <?= $v->building_area ?> m2
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="float-start">
                                        <?= plang('Surface Area') ?>
                                    </div>
                                    <div class="float-end">
                                        <?= $v->surface_area ?> m2
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="float-start">
                                        <?= plang('Number of Bedroom') ?>
                                    </div>
                                    <div class="float-end">
                                        <?= $v->type_number_of_bedroom ?>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="float-start">
                                        <?= plang('Number of Bathroom') ?>
                                    </div>
                                    <div class="float-end">
                                        <?= $v->type_number_of_bathroom ?>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="float-start">
                                        <?= plang('Number of Carport') ?>
                                    </div>
                                    <div class="float-end">
                                        <?= $v->type_number_of_carport ?>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="float-start">
                                        <?= plang('Actions') ?>
                                    </div>
                                    <div class="float-end">
                                        <a href="<?= base_url('a/edit-type/' . $v->id_type) ?>" class="btn btn-primary btn-sm"><?= plang('Edit') ?></a>
                                        <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#delete<?= $v->id_type ?>">
                                            <?= plang('Delete') ?>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h5 class="card-title">SEO</h5>
                        </div>
                        <div class="float-end">
                            <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#deleteSeo">
                                <?= plang('Delete') ?>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (empty($seo)) { ?>
                            <div class="text-center">
                                <?= plang('No Seo') ?>
                                <br>
                                <br>
                                <a href="<?= base_url('a/add-seo/' . $property->id_property) ?>" class="btn btn-primary"><?= plang('Add Seo') ?></a>
                            </div>
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="form-label"><?= plang('Seo Keywords') ?></label>
                                    <textarea class="form-control m-b-md" readonly><?= $seo->seo_keywords ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label"><?= plang('Seo Description') ?></label>
                                    <textarea class="form-control m-b-md" readonly><?= $seo->seo_description ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="" class="form-label"><?= plang('Seo Author') ?></label>
                                    <input type="text" class="form-control" value="<?= $seo->seo_author ?>" readonly>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($type as $key => $v) { ?>
    <div class="modal fade" id="delete<?= $v->id_type ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete') ?> <?= $v->type_name ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= plang('Are you sure') ?> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                    <a href="<?= base_url('admin/property/deleteType/' . $v->id_type . '/' . $property->property_seo) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="deleteProperty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete') ?> <?= $property->property_name ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= plang('Are you sure') ?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                <a href="<?= base_url('admin/property/deleteProperty/' . $property->id_property) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteSeo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete') ?> SEO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= plang('Are you sure') ?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                <a href="<?= base_url('admin/property/deleteSeo/' . $seo->id_seo . '/' . $property->property_seo) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteAllType" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete All Type') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= plang('Are you sure') ?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                <a href="<?= base_url('admin/property/deleteAllType/' . $property->id_property . '/' . $property->property_seo) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteAllGallery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete All Gallery') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= plang('Are you sure') ?> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                <a href="<?= base_url('admin/property/deleteAllGallery/' . $property->id_property . '/' . $property->property_seo) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="active" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= plang('Activate') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= plang('Are you sure you want to activate this property') ?> <?= $property->property_name ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                <a href="<?= base_url('admin/property/active/' . $property->id_property . '/' . $property->property_seo) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deactive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= plang('Deactivate') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= plang('Are you sure you want to deactivate this property') ?> <?= $property->property_name ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                <a href="<?= base_url('admin/property/deactive/' . $property->id_property . '/' . $property->property_seo) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
            </div>
        </div>
    </div>
</div>

<?php foreach ($gallery as $key => $v) { ?>
    <div class="modal fade" id="deleteImage<?= $v->id_gallery ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete Image') ?> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="<?= base_url() ?>/assets/images/property/<?= $v->image_name ?>" width="200" class="mb-5" alt="">
                    <br>
                    <?= plang('Are you sure') ?> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                    <a href="<?= base_url('admin/property/deleteImage/' . $v->id_gallery . '/' . $property->property_seo) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>