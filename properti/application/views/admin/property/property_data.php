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
                <a href="<?= base_url('a/add-property') ?>" class="btn btn-primary w-100 m-b-md"><?= plang('Add New Property') ?></a>
                <a href="" class="btn btn-primary w-100 m-b-md"><?= plang('Report') ?></a>
                <a href="" class="btn btn-danger w-100 "><?= plang('Delete All') ?></a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><?= plang('Property Data') ?></h5>
            </div>
            <div class="card-body">
                <table id="datatable1" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th><?= plang('Property Name') ?></th>
                            <th><?= plang('Starting from price')  ?></th>
                            <th><?= plang('Address')  ?></th>
                            <th><?= plang('City')  ?></th>
                            <th><?= plang('Created') ?></th>
                            <th><?= plang('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($property as $key => $v) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $v->property_name ?></td>
                                <td>IDR <?= number_format($v->property_price)  ?></td>
                                <td><?= $v->property_address ?></td>
                                <td><?= $v->city_name ?></td>
                                <td><?= $v->created ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('a/detail/' . $v->property_seo) ?>" class="btn btn-primary"><span class="material-icons-outlined">visibility</span></a>
                                    <a href="" class="btn btn-success"><span class="material-icons-outlined">edit</span></a>
                                    <a href="" class="btn btn-danger"><span class="material-icons-outlined">delete</span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th><?= plang('Property Name') ?></th>
                            <th><?= plang('Starting from price')  ?></th>
                            <th><?= plang('Address')  ?></th>
                            <th><?= plang('City')  ?></th>
                            <th><?= plang('Created') ?></th>
                            <th><?= plang('Actions') ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>