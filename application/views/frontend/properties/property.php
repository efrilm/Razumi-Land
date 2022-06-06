<section class="page-header padding" style="background-image: url(<?= base_url() ?>/assets/images/banner/banner7.jpg);">
    <div class="container">
        <div class="page-content text-center">
            <h2>Razumi Land <?= plang('Properties') ?></h2>
            <p><?= plang('All Properties in Razumi Land') ?>.</p>
        </div>
    </div>
</section>
<!--/.page-header-->


<section class="projects-section bg-dark padding">
    <div class="container">
        <div class="row">
            <?php foreach ($p as $key => $v) { ?>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="project-item">
                        <img src="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" height="350" alt="<?= $v->property_thumbnail ?>">
                        <div class="overlay"></div>
                        <a href="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                        <div class="projects-content">
                            <a href="#" class="category"><?= $v->city_name ?></a>
                            <h3><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="tittle"><?= $v->property_name ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--/.projects-section-->
