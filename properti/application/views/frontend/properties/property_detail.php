<?php $this->load->view('frontend/navbar_all'); ?>
<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] xl:h-[650px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('<?= base_url() ?>assets/images/property/<?= $p->property_thumbnail ?>');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                    <h1 class="font-recoleta text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl">
                        <?= $p->property_name ?>
                    </h1>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero section end -->

<!-- Popular Properties start -->
<section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">

        <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
            <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                <img src="<?= base_url() ?>assets/images/property/<?= $p->property_thumbnail ?>" class="w-auto h-auto" loading="lazy" alt="Elite Garden Resedence." width="770" height="465">
                <div class="mt-[45px] mb-[35px]">
                    <h2 class="font-recoleta leading-tight text-[22px] md:text-[28px] lg:text-[36px] text-primary mb-[5px]">
                        <?= $p->property_name ?>.</h2>
                    <h3 class="font-light text-[18px] text-secondary underline mb-[20px]"><?= $p->property_address ?></h3>
                    <p><?= $p->property_description ?></p>
                </div>

                <div class="grid grid-cols-12 xl:flex xl:flex-wrap gap-y-[30px] gap-x-[15px] xl:gap-x-[0px] mb-[30px]">
                    <?php foreach ($gallery as $key => $v) { ?>
                        <div class="col-span-4" style="margin-right: 20px;">
                            <a href="<?= base_url() ?>assets/images/property/<?= $v->image_name ?>" class="gallery-image">
                                <img class="object-cover w-[150] h-[150] rounded-[8px]" src="<?= base_url() ?>assets/images/property/<?= $v->image_name ?>" alt="<?= $v->image_name ?>" loading="lazy" width="270" height="187">
                            </a>
                        </div>
                    <?php } ?>
                </div>

                <!-- <h4 class="font-recoleta text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px]">
                    Property Amenities<span class="text-secondary">.</span>
                </h4> -->

                <!-- <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 px-[15px] mx-[-15px] mt-[40px]">
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>7 Beedrooms</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Gym for all</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Air Conditioning</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>CC Camera</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>3 Garaze</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Cable TV</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>10 Nearby Restaurant</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Internet</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Security System</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>10 Nearby Restaurant</span>
                    </li>

                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>6 Nearby Schools</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Gym for all</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Dishwasher</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>5 Balcony</span>
                    </li>
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                        <span>Swimming Pool</span>
                    </li>
                </ul> -->
                <!-- <h5 class="font-recoleta text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize lg:mt-[25px] mb-[40px]">

                    Floor Plan<span class="text-secondary">.</span>
                </h5> -->

                <!-- <div class="grid grid-cols-1 sm:grid-cols-2 gap-[30px]">
                    <div class="text-center">
                        <img src="assets/images/floor-plan/floor1.png" alt="Floor Plan">
                        <p>Ground floor</p>
                    </div>

                    <div class="text-center">
                        <img src="assets/images/floor-plan/floor3.png" alt="Floor Plan">
                        <p>1st Floor</p>
                    </div>
                </div> -->

                <div class="grid grid-cols-12 mt-[70px]">
                    <div class="col-span-12 flex flex-wrap flex-col md:flex-row md:items-center justify-between mb-[50px] lg:mb-[70px]">
                        <div class="mb-5 xl:mb-0">
                            <h2 class="font-recoleta text-primary text-[24px] sm:text-[28px] capitalize">
                                <?= plang('Type') ?><span class="text-secondary">.</span></h2>
                        </div>
                        <ul class="all-properties flex flex-wrap lg:pt-[10px]">
                            <?php foreach ($type as $key => $v) { ?>
                                <li data-tab="<?= $v->id_type ?>" class="mr-[30px] md:mr-[35px] mb-4 lg:mb-0 leading-none ">
                                    <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">
                                        <?= $v->type_name ?>
                                    </button>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="col-span-12 mb-[80px]">

                        <?php foreach ($type as $key => $v) { ?>
                            <div id="<?= $v->id_type ?>" class="properties-tab-content ">
                                <ul>
                                    <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                        <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                            <div class="flex-1">
                                                <h6 class="text-primary font-recoleta text-[18px] leading-none mb-[10px]">
                                                    <?= plang('Building Area') ?> : <?= $v->building_area ?> m2
                                                </h6>
                                                <h6 class="text-primary font-recoleta text-[18px] leading-none mb-[10px]">
                                                    <?= plang('Surface Area') ?> : <?= $v->surface_area ?> m2
                                                </h6>
                                                <h6 class="text-primary font-recoleta text-[18px] leading-none mb-[10px]">
                                                    <?= plang('Number of Bedroom') ?> : <?= $v->type_number_of_bedroom ?>
                                                </h6>
                                                <h6 class="text-primary font-recoleta text-[18px] leading-none mb-[10px]">
                                                    <?= plang('Number of Bathroom') ?> : <?= $v->type_number_of_bathroom ?>
                                                </h6>
                                                <h6 class="text-primary font-recoleta text-[18px] leading-none mb-[10px]">
                                                    <?= plang('Number of Carport') ?> : <?= $v->type_number_of_carport ?>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center">
                                            <span class="ml-[20px]">IDR <?= number_format($v->type_price) ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                <aside class="mb-[-40px] asidebar">
                    <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <button type="submit" class="block w-full z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all">Whatsapp</button>

                    </div>

                    <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]"><?= plang('Featured Property') ?><span class="text-secondary">.</span></h3>
                        <div class="sidebar-carousel relative">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <?php foreach ($fp as $key => $v) { ?>
                                            <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_10px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center mb-[20px]">
                                                <div class="relative">
                                                    <a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="block">
                                                        <img src="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" class="w-full h-full" loading="lazy" width="370" height="266" alt="<?= $v->property_thumbnail ?>">
                                                    </a>
                                                </div>

                                                <div class="pt-[15px] pb-[20px] px-[20px] text-left">
                                                    <h3><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="font-recoleta leading-tight text-[16px] text-primary">
                                                            <?= $v->property_name ?>
                                                        </a></h3>
                                                    <h4><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="font-light text-[14px] text-secondary underline"><?= $v->property_address ?></a></h4>
                                                    <ul class="mt-[10px]">
                                                        <li class="flex flex-wrap items-center justify-between">
                                                            <span class="font-recoleta text-[14px] text-primary leading-none">IDR <?= number_format($v->property_price) ?></span>

                                                        </li>
                                                    </ul>


                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>

                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="flex flex-wrap items-center justify-center mt-[25px]">
                                <div class="swiper-button-prev w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                </div>
                                <div class="swiper-button-next w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                </div>

                            </div>

                        </div>

                    </div>

                </aside>
            </div>
        </div>

    </div>
</section>
<!-- Popular Properties end -->
<!-- Brand section Start-->
<?php $this->load->view('frontend/utilities/partner'); ?>
<!-- Brand section End-->