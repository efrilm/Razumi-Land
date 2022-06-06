<header id="header" class="header-section">
    <div class="container">
        <nav class="navbar ">
            <a href="index.html" class="navbar-brand"><img src="<?= base_url() ?>/assets/images/logo/<?= $logo ?>" alt="Arkit"></a>
            <div class="d-flex menu-wrap">
                <div id="mainmenu" class="mainmenu">
                    <ul class="nav">
                        <li><a href="<?= base_url() ?>"><?= plang('Home') ?></a></li>
                        <li><a href="<?= base_url('property') ?>"><?= plang('Properties') ?></a></li>
                        <li><a href="<?= base_url('about') ?>"><?= plang('About') ?></a></li>
                        <li><a href="<?= base_url('contact') ?>"><?= plang('Contact') ?></a></li>

                        <li class="phone"><i class="fa fa-phone"></i> <?= $no_phone ?></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--.header-section -->

<div class="header-height"></div>