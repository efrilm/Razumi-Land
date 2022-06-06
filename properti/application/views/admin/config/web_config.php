<?= $this->session->flashdata('message'); ?>

<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#web" type="button" role="tab" aria-controls="hoaccountme" aria-selected="true"><?= plang('Web') ?></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#logo" type="button" role="tab" aria-controls="security" aria-selected="false"><?= plang('Logo') ?></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="integrations-tab" data-bs-toggle="tab" data-bs-target="#social-media" type="button" role="tab" aria-controls="integrations" aria-selected="false"><?= plang('Social Media') ?></button>
    </li>
</ul>
<div class="row">
    <div class="col">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="account-tab">
                <?= form_open('admin/config/processUpdateWeb') ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Title') ?></label>
                                <input type="text" class="form-control" name="title" value="<?= $config->title ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Email') ?></label>
                                <input type="text" class="form-control" name="email" value="<?= $config->email ?>">
                            </div>
                        </div>
                        <div class="row m-t-lg">
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Keywords') ?></label>
                                <input type="text" class="form-control" name="keywords" value="<?= $config->keywords ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Company Name') ?></label>
                                <input type="text" class="form-control" name="company_name" value="<?= $config->company_name ?>">
                            </div>
                        </div>
                        <div class="row m-t-lg">
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('No. Phone') ?></label>
                                <input type="number" class="form-control" name="no_phone" value="<?= $config->no_phone ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('No. Whatsapp') ?></label>
                                <input type="number" class="form-control" name="no_whatsapp" value="<?= $config->no_whatsapp ?>">
                            </div>
                        </div>
                        <div class="row m-t-lg">
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Description') ?></label>
                                <textarea class="form-control" name="description"><?= $config->description ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><?= plang('Address') ?></label>
                                <textarea class="form-control" name="address"><?= $config->address ?></textarea>
                            </div>
                        </div>
                        <div class="row m-t-lg">
                            <div class="col">
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary m-t-sm"><?= plang('Update') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="security-tab">
                <?= form_open_multipart('admin/config/processLogo') ?>
                <div class="card">
                    <div class="card-body">
                        <label class="form-label"><?= plang('Logo') ?></label>
                        <input type="file" class="form-control preview_image m-b-md" name="logo">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="image_load" src="<?= base_url() ?>assets/images/logo/<?= $config->logo ?>" width="150" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary"><?= plang('Update') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
                <?= form_open_multipart('admin/config/processFavIcon') ?>
                <div class="card">
                    <div class="card-body">
                        <label class="form-label"><?= plang('Favicon') ?></label>
                        <input type="file" class="form-control preview_image m-b-md" name="favicon">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="image_load" src="<?= base_url() ?>assets/images/logo/<?= $config->favicon ?>" width="150" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary"><?= plang('Update') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <div class="tab-pane fade" id="social-media" role="tabpanel" aria-labelledby="integrations-tab">
                <?= form_open('admin/config/processUpdateSocialMedia') ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label class="form-label"><?= plang('Instagram') ?></label>
                                <input type="text" class="form-control m-b-md" name="instagram" value="<?= $config->instagram ?>" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label"><?= plang('Facebook') ?></label>
                                <input type="text" class="form-control m-b-lg" name="facebook" value="<?= $config->facebook ?>" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary"><?= plang('Update') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>

        </div>
    </div>