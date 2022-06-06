<?= $this->session->flashdata('message'); ?>
<div class="row">
    <div class="col-md-8">
        <?php if ($action == 'add') { ?>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><?= plang('Add City') ?></h5>
                </div>
                <?= form_open('a/add-city') ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label class="form-label"><?= plang('City Name') ?></label>
                            <input type="text" class="form-control m-b-md" name="city_name" placeholder="<?= plang('City Name') ?>" value="<?= set_value('city_name') ?>">
                            <small class="text-danger"><?= form_error('city_name') ?></small>
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
                    <h5 class="card-title"><?= plang('Edit City') ?></h5>
                </div>
                <div class="card-body">
                    <?= form_open('a/edit-city/' . $c->id_city) ?>
                    <div class="row">
                        <div class="col">
                            <label class="form-label"><?= plang('City Name') ?></label>
                            <input type="text" name="city_name" class="form-control m-b-md" value="<?= $c->city_name ?>">
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
                <a href="<?= base_url('a/add-city') ?>" class="btn btn-primary w-100 m-b-md"><?= plang('Add New City') ?></a>
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
                            <th><?= plang('City Name') ?></th>
                            <th><?= plang('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($city as $key => $v) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $v->city_name ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('a/edit-city/' . $v->id_city) ?>" class="btn btn-success"><span class="material-icons-outlined">edit</span></a>
                                    <button type="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#delete<?= $v->id_city ?>">
                                        <span class="material-icons-outlined">delete</span>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th><?= plang('City Name') ?></th>
                            <th><?= plang('Actions') ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?php foreach ($city as $key => $v) { ?>
    <div class="modal fade" id="delete<?= $v->id_city ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= plang('Delete') ?> <?= $v->city_name ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= plang('Are you sure') ?> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= plang('Cancel') ?></button>
                    <a href="<?= base_url('admin/city/delete/' . $v->id_city) ?>" class="btn btn-primary"><?= plang('Yes') ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>