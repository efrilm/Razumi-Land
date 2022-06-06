<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text"><?= $company_name ?></span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <?php
                $user = $this->user->getUser($this->session->userdata('user_id'))->row();
                ?>
                <img src="<?= base_url() ?>assets/images/profile/<?= $user->photo ?>">
                <span class="activity-indicator"></span>
                <span class="user-info-text"><?= $user->first_name ?><br><span class="user-state-info"><?= $user->role_name ?></span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                <?= plang('Main') ?>
            </li>
            <li class="<?php if ($this->uri->segment(2) == 'dashboard') {
                            echo 'active-page';
                        } ?>">
                <a href="<?= base_url('a/dashboard') ?>" class="active"><i class="material-icons-two-tone">dashboard</i><?= plang('Dashboard') ?></a>
            </li>
            <li class="<?php if ($this->uri->segment(2) == 'properties') {
                            echo 'active-page';
                        } ?>">
                <a href="<?= base_url('a/properties') ?>" class="active"><i class="material-icons-two-tone">home</i><?= plang('Properties') ?></a>
            </li>
            <li class="<?php if ($this->uri->segment(2) == 'user') {
                            echo 'active-page';
                        } ?>">
                <a href="<?= base_url('a/user') ?>" class="active"><i class="material-icons-two-tone">people</i><?= plang('User') ?></a>
            </li>
            <li class="sidebar-title">
                <?= plang('Utilities') ?>
            </li>
            <li class="<?php if ($this->uri->segment(2) == 'city') {
                            echo 'active-page';
                        } ?>">
                <a href="<?= base_url('a/cities') ?>" class="active"><i class="material-icons-two-tone">apartment</i><?= plang('City') ?></a>
            </li>
            <li class="sidebar-title">
                <?= plang('Configuration') ?>
            </li>
            <li class="<?php if ($this->uri->segment(2) == 'web-configuration') {
                            echo 'active-page';
                        } ?>">
                <a href="<?= base_url('a/web-configuration') ?>" class="active"><i class="material-icons-two-tone">settings</i><?= plang('Web Configuration') ?></a>
            </li>
            <li class="<?php if ($this->uri->segment(2) == 'user') {
                            echo 'active-page';
                        } ?>">
                <a href="<?= base_url('auth/signOut') ?>" class="active"><i class="material-icons-two-tone">logout</i><?= plang('Sign Out') ?></a>
            </li>
        </ul>
    </div>
</div>