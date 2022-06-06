<?php $this->load->view('frontend/navbar_home'); ?>
<?php $this->load->view('frontend/home/header'); ?>

<!-- Popular Properties start -->
<section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12"> <span class="text-secondary text-tiny inline-block mb-2"><?= plang('Best Choice') ?></span></div>
            <div class="col-span-12">
                <div class="flex flex-col sm:flex-row items-start justify-between mb-[50px]">
                    <div>
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                            <?= plang('Popular Properties') ?><span class="text-secondary">.</span></h2>
                    </div>
                    <div>
                        <a href="<?= base_url('property') ?>" class="flex flex-wrap items-center text-secondary text-tiny"><?= plang('Explore all') ?>
                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
            <?php foreach ($pp as $key => $v) { ?>
                <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                    <div class="relative">
                        <a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="block">
                            <img src="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" class="w-full h-full" loading="lazy" width="370" height="266" alt="<?= $v->property_thumbnail ?>">
                        </a>
                    </div>

                    <div class="py-[20px] px-[20px]">
                        <h3><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary"><?= $v->property_name ?></a></h3>
                        <h4><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="font-light text-tiny text-secondary "><?= $v->property_address ?></a></h4>
                        <span class="font-light text-sm"><?= $v->city_name ?></span>
                        <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-recoleta text-base text-primary px-[15px] bg-white">IDR <?= number_format($v->property_price) ?></span></div>
                        <p class="font-light"><?= $v->number_of_bedroom ?> <?= plang('Bedroom') ?> - <?= $v->number_of_bathroom ?> <?= plang('Bathroom') ?> - <?= $v->number_of_carport ?> Carport</p>
                    </div>
                </div>
            <?php }  ?>
        </div>

    </div>
</section>
<!-- Popular Properties end -->


<!-- About Us Sectin Start -->
<section class="about-section">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-7">
                <div class="scene" data-relative-input="true">
                    <img data-depth="0.1" src="assets/images/about/about.png" class="2xl:ml-[-130px] mx-auto lg:max-w-[500px] xl:max-w-[729px]" loading="lazy" width="729" height="663" alt="about Image">
                </div>
            </div>
            <div class="col-span-12 lg:col-span-5">
                <span class="text-secondary text-tiny inline-block mb-2"><?= plang('Why Choose us') ?></span>
                <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-3">
                    Platform Razumi Land
                    <span class="text-secondary">.</span>
                </h2>
                <div class="-mb-10 mt-[45px]">
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="<?= base_url() ?>assets/images/icon/islami.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">
                                <?= plang('Islamic') ?>
                            </h3>
                            <p class="max-w-[315px]"><?= plang('We present Islamic values ​​by translating in every process that exists as part of Worship to Allah.') ?></p>
                        </div>

                    </div>
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="<?= base_url() ?>assets/images/icon/quality.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2"><?= plang('Quality') ?></h3>
                            <p class="max-w-[315px]"><?= plang('Quality becomes a fixed price as a foundation in building future life. We guarantee quality for every job.') ?></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="<?= base_url() ?>assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">
                                <?= plang('Professional') ?>
                            </h3>
                            <p class="max-w-[315px]"><?= plang('Support by a capable team in their field to ensure that every the process from contract to delivery thank the unit is running well.') ?></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- About Us Sectin End -->

<!-- Explore Cities Start-->
<section class="explore-cities-section pt-[80px] pb-[120px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="mb-[30px] lg:mb-[60px] text-center">
                    <span class="text-secondary text-tiny inline-block mb-2"><?= plang('Explore Cities') ?></span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                        <?= plang('Find Your Neighborhood') ?><span class="text-secondary">.</span>
                    </h2>
                </div>
                <div class="cities-slider">
                    <div class="swiper  -mx-[30px] -my-[60px] px-[30px] py-[60px]">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide start -->
                            <?php foreach ($city as $key => $v) { ?>
                                <?php $numCity = $this->property->getPropertyByCityClient($v->id_city)->num_rows(); ?>
                                <div class="swiper-slide text-center">
                                    <div class="relative group">
                                        <a href="agency-details.html" class="block">
                                            <img src="<?= base_url() ?>assets/images/cities/cities1.jpg" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="New York">
                                            <div class="cities-shadow bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[15px] py-[20px]">
                                                <span class="font-recoleta font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all"><?= $v->city_name ?></span>
                                                <p class="font-light text-tiny capitalize text-secondary group-hover:text-primary transition-all"><?= $numCity ?> <?= plang('Properties') ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- swiper-slide end-->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Explore Cities End-->


<!-- Brand section Start-->
<?php $this->load->view('frontend/utilities/partner'); ?>
<!-- Brand section End-->