<section class="page-header padding" style="background-image: url(<?= base_url() ?>/assets/images/property/<?= $p->property_thumbnail ?>);">
    <div class="container">
        <div class="page-content text-center">
            <h2><?= $p->property_name ?></h2>
            <p><?= $p->city_name ?></p>
        </div>
    </div>
</section>
<!--/.page-header-->

<section class="project-single-section bg-dark padding">
    <div class="dots"></div>
    <div class="container">
        <div class="row project-single-wrap">
            <div class="col-sm-6 padding-15">
                <div id="project-single-carousel" class="project-single-carousel owl-carousel">
                    <div class="single-carousel">
                        <img src="<?= base_url() ?>/assets/images/property/<?= $p->property_thumbnail ?>" alt="<?= $p->property_thumbnail ?>">
                    </div>
                    <?php foreach ($gallery as $key => $v) { ?>
                        <div class="single-carousel">
                            <img src="<?= base_url() ?>/assets/images/property/<?= $v->image_name ?>" alt="<?= $v->image_name ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6 padding-15">
                <div class="project-single-content">
                    <h2 style="color: #bfca02 !important;"><?= $p->property_name ?></h2>
                    <p><?= $p->property_description ?></p>
                    <ul class="project-details">
                        <li><span><?= plang('Address') ?></span>: <?= $p->property_address ?></li>
                        <li><span><?= plang('City') ?></span>: <?= $p->city_name ?></li>
                        <li><span><?= plang('Postal Code') ?></span>: <?= $p->property_postal_code ?></li>
                        <li><span><?= plang('Number of Bedroom') ?></span>: <?= $p->number_of_bedroom ?></li>
                        <li><span><?= plang('Number of Bathroom') ?></span>: <?= $p->number_of_bathroom ?></li>
                        <li><span><?= plang('Number of Carport') ?></span>: <?= $p->number_of_carport ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="project-single-section bg-dark padding">
    <div class="dots"></div>
    <div class="container">
        <div class="row project-single-wrap">
            <?php foreach ($type as $key => $v) { ?>
                <div class="col-sm-6 padding-15">
                    <div class="project-single-content">
                        <h2 style="color: #bfca02 !important;"><?= $v->type_name ?></h2>
                        <h4 style="color: #222222 !important;">IDR <?= number_format($v->type_price) ?></h4>
                        <ul class="project-details">
                            <li><span><?= plang('Building Area') ?></span>: <?= $v->building_area ?> m2</li>
                            <li><span><?= plang('Surface Area') ?></span>: <?= $v->surface_area ?> m2</li>
                            <li><span><?= plang('Number of Bedroom') ?></span>: <?= $v->type_number_of_bedroom ?> </li>
                            <li><span><?= plang('Number of Bathroom') ?></span>: <?= $v->type_number_of_bathroom ?> </li>
                            <li><span><?= plang('Number of Carport') ?></span>: <?= $v->type_number_of_carport ?> </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="projects-section bg-dark padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <span><?= plang('Property') ?></span>
            <h2><?= plang('Featured Property') ?></h2>
        </div>
        <!--/.section-heading-->
        <div id="projects-carousel" class="projects-carousel owl-carousel">
            <?php foreach ($fp as $key => $v) { ?>
                <div class="project-item">
                    <img src="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" height="350" alt="<?= $v->property_thumbnail ?>">
                    <div class="overlay"></div>
                    <a href="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" class="view-icon img-popup"> <i class="fas fa-expand"></i></a>
                    <div class="projects-content">
                        <a href="#" class="category"><?= $v->city_name ?></a>
                        <h3><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="tittle"><?= $v->property_name ?></a></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--/.projects-section-->

<a href="https://api.whatsapp.com/send?phone=<?= $v->no_whatsapp ?>" class="float-wa" target="_blank">
    <i class="fas fa-phone my-float-wa"></i>
</a>