<div class="row">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-md-8">
            <?php if ($action == 'add') { ?>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?= plang('Add Banner') ?></h5>
                    </div>
                    <?= form_open_multipart('a/add-banner') ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Title') ?></label>
                                <input type="text" class="form-control m-b-md" name="banner_title" placeholder="<?= plang('Banner Title') ?>" value="<?= set_value('banner_title') ?>">
                                <small class="text-danger"><?= form_error('banner_title') ?></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Subtitle') ?></label>
                                <input type="text" class="form-control m-b-md" name="banner_subtitle" placeholder="<?= plang('Banner Subtitle') ?>" value="<?= set_value('banner_subtitle') ?>">
                                <small class="text-danger"><?= form_error('banner_subtitle') ?></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Moto') ?></label>
                                <input type="text" class="form-control m-b-md" name="banner_moto" placeholder="<?= plang('Banner Moto') ?>" value="<?= set_value('banner_moto') ?>">
                                <small class="text-danger"><?= form_error('banner_moto') ?></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Image') ?></label>
                                <input type="file" class="form-control preview_image m-b-md" name="banner_image">
                                <img class="image_load" src="<?= base_url() ?>/assets/images/other/no_image.png" width="100" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary"><?= plang('Save') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            <?php } else if ($action == 'edit') { ?>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?= plang('Edit Banner') ?></h5>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('a/edit-banner/' . $b->id_banner) ?>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Title') ?></label>
                                <input type="text" class="form-control m-b-md" name="banner_title" placeholder="<?= plang('Banner Title') ?>" value="<?= $b->banner_title ?>">
                                <small class="text-danger"><?= form_error('banner_title') ?></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Subtitle') ?></label>
                                <input type="text" class="form-control m-b-md" name="banner_subtitle" placeholder="<?= plang('Banner Subtitle') ?>" value="<?= $b->banner_subtitle ?>">
                                <small class="text-danger"><?= form_error('banner_subtitle') ?></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Moto') ?></label>
                                <input type="text" class="form-control m-b-md" name="banner_moto" placeholder="<?= plang('Banner Moto') ?>" value="<?= $b->banner_moto ?>">
                                <small class="text-danger"><?= form_error('banner_moto') ?></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Banner Image') ?></label>
                                <input type="file" class="form-control preview_image m-b-md" name="banner_image">
                                <img class="image_load" src="<?= base_url() ?>/assets/images/banner/<?= $b->banner_image ?>" width="100" alt="">
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
                    </div>
                </div>
            <?php  } else { ?>
                <?php $this->load->view('admin/utilities/no_action'); ?>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <div class="card widget widget-info">
                <div class="card-header">
                    <h5 class="card-title"><?= plang('Actions') ?></h5>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('a/add-banner') ?>" class="btn btn-primary w-100 m-b-md"><?= plang('Add New Banner') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><?= plang('City Data') ?></h5>
                </div>
                <div class="card-body">
                    <table id="datatable1" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th><?= plang('Banner Image') ?></th>
                                <th><?= plang('Banner Title') ?></th>
                                <th><?= plang('Banner Subtitle') ?></th>
                                <th><?= plang('Banner Moto') ?></th>
                                <th><?= plang('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($banner as $key => $v) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img src="<?= base_url() ?>/assets/images/banner/<?= $v->banner_image ?>" width="250" alt="<?= $v->banner_image ?>">
                                    </td>
                                    <td><?= $v->banner_title ?></td>
                                    <td><?= $v->banner_subtitle ?></td>
                                    <td><?= $v->banner_moto ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('a/edit-banner/' . $v->id_banner) ?>" class="btn btn-success btn-sm mb-2"><span class="material-icons-outlined">edit</span></a>
                                        <button type="button" class="btn btn-danger btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#delete<?= $v->id_banner ?>">
                                            <span class="material-icons-outlined">delete</span>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th><?= plang('Banner Image') ?></th>
                                <th><?= plang('Banner Title') ?></th>
                                <th><?= plang('Banner Subtitle') ?></th>
                                <th><?= plang('Banner Moto') ?></th>
                                <th><?= plang('Actions') ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php foreach ($banner as $key => $v) { ?>
        <div class="modal fade" id="delete<?= $v->id_banner ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete') ?> <?= $v->banner_title ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= plang('Are you sure') ?> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                        <a href="<?= base_url('admin/banner/delete/' . $v->id_banner) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>