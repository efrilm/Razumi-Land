<div class="row">
    <div class="card">
        <div class="card-body">
            <?= form_open('a/add-user') ?>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label"><?= plang('First Name') ?></label>
                    <input type="text" class="form-control m-b-md" name="first_name" value="<?= set_value('first_name') ?>" placeholder="<?= plang('First Name') ?>">
                    <small class="text-danger"><?= form_error('first_name') ?></small>
                </div>
                <div class="col-md-6">
                    <label class="form-label"><?= plang('Last Name') ?></label>
                    <input type="text" class="form-control m-b-md" name="last_name" value="<?= set_value('last_name') ?>" placeholder="<?= plang('Last Name') ?>">
                    <small class="text-danger"><?= form_error('last_name') ?></small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label"><?= plang('Email') ?></label>
                    <input type="text" class="form-control m-b-md" name="email" value="<?= set_value('email') ?>" placeholder="<?= plang('Email') ?>">
                    <small class="text-danger"><?= form_error('email') ?></small>
                </div>
                <div class="col-md-6">
                    <label class="form-label"><?= plang('No. Phone') ?></label>
                    <input type="number" class="form-control m-b-md" name="no_phone" value="<?= set_value('no_phone') ?>" placeholder="<?= plang('No. Phone') ?>">
                    <small class="text-danger"><?= form_error('no_phone') ?></small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label"><?= plang('Password') ?></label>
                    <input type="password" class="form-control m-b-md" name="password" placeholder="<?= plang('Password') ?>">
                    <small class="text-danger"><?= form_error('password') ?></small>
                </div>
                <div class="col-md-6">
                    <label class="form-label"><?= plang('Confirm Password') ?></label>
                    <input type="password" class="form-control m-b-md" name="confirm_password" placeholder="<?= plang('Confirm Password') ?>">
                    <small class="text-danger"><?= form_error('confirm_password') ?></small>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="float-end">
                        <button type="submit" class="btn btn-primary"><?= plang('Save') ?></button>
                    </div>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>