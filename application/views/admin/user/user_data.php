<?= $this->session->userdata('message'); ?>
<div class="row">
    <div class="col-md-8">
        <?php $this->load->view('admin/utilities/no_action'); ?>
    </div>
    <div class="col-md-4">
        <div class="card widget widget-info">
            <div class="card-header">
                <h5 class="card-title"><?= plang('Actions') ?></h5>
            </div>
            <div class="card-body">
                <a href="<?= base_url('a/add-user') ?>" class="btn btn-primary w-100 m-b-md"><?= plang('Add New User') ?></a>
                <a href="" class="btn btn-primary w-100 m-b-md"><?= plang('Report') ?></a>
                <a href="" class="btn btn-danger w-100 "><?= plang('Delete All') ?></a>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5 class="card-title"><?= plang('User Data') ?></h5>
    </div>
    <div class="card-body">
        <table id="datatable1" class="display" style="width:100%">
            <thead>
                <tr>
                    <th><?= plang('Full Name') ?></th>
                    <th><?= plang('Email')  ?></th>
                    <th><?= plang('No. Phone')  ?></th>
                    <th><?= plang('Role')  ?></th>
                    <th><?= plang('Created') ?></th>
                    <th><?= plang('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($user as $key => $value) {
                ?>
                    <tr>
                        <td><?= $value->first_name ?> <?= $value->last_name ?></td>
                        <td><?= $value->email ?></td>
                        <td><?= $value->no_phone ?></td>
                        <td><?= $value->role_name ?></td>
                        <td><?= $value->created ?></td>
                        <td>
                            <a href="<?= base_url('') ?>" class="btn btn-success btn-sm"><span class="material-icons-outlined">edit</span></a>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th><?= plang('Full Name') ?></th>
                    <th><?= plang('Email')  ?></th>
                    <th><?= plang('No. Phone')  ?></th>
                    <th><?= plang('Role')  ?></th>
                    <th><?= plang('Created') ?></th>
                    <th><?= plang('Actions') ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>