<div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <?= $this->session->flashdata('message'); ?>
        <div class="logo">
            <a href="index.html">Neptune</a>
        </div>
        <p class="auth-description"><?= plang('Please sign-in to your account and continue to the dashboard') ?>.</p>
        <?= form_open('sign-in') ?>
        <div class="auth-credentials m-b-xxl">
            <label for="signInEmail" class="form-label"><?= plang('Email') ?></label>
            <input type="text" name="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" value="<?= set_value('email') ?>" placeholder="example@gmail.com">
            <small class="text-danger"><?= form_error('email') ?></small>

            <label for="signInPassword" class="form-label"><?= plang('Password') ?></label>
            <input type="password" name="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            <small class="text-danger"><?= form_error('password') ?></small>
        </div>

        <div class="auth-submit">
            <button type="submit" class="btn btn-primary"><?= plang('Sign In')  ?></button>
            <a href="#" class="auth-forgot-password float-end"><?= plang('Forgot password') ?>?</a>
        </div>
        <?= form_close() ?>
        <div class="divider"></div>
    </div>
</div>