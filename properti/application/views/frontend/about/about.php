<?php $this->load->view('frontend/navbar_all'); ?>

<!-- About Us Sectin Start -->
<section class="about-section pt-[50px] lg:pt-[70px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">
            <div class="col-span-12 lg:col-span-6 relative mb-[30px]">
                <div class="scene absolute top-0 right-[5%] xl:right-[10%]" data-relative-input="true">
                    <img data-depth="0.2" src="assets/images/about/dot-with-line.png" width="48" height="158" alt="image">
                </div>

                <div class="scene absolute bottom-[10%] lg:bottom-[25%] xl:bottom-[15%] left-[10%]" data-relative-input="true">
                    <img data-depth="0.3" src="assets/images/about/star.png" width="85" height="64" loading="lazy" alt="image">
                </div>


                <div class="scene" data-relative-input="true">
                    <img class="block mx-auto" data-depth="0.1" src="assets/images/about/about2.png" loading="lazy" width="520" height="467" alt="about Image">
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 mb-[30px]">
                <span class="text-secondary text-tiny inline-block mb-2"><?= plang("Why Choose us") ?></span>
                <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl max-w-[500px] mb-3">
                    <?= plang('Our Choice of Sharia') ?>
                    <span class="text-secondary">.</span>
                </h2>

                <p class="max-w-[480px]"><b> Razumi Land </b> <?= plang('is a property development service company that was born as a form of commitment to contribute to development and sales with sharia concepts in accordance with Islamic law') ?>.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-[20px] -mb-[30px] mt-[45px]">
                    <div class="mb-[30px] lg:mb-10 border border-[#FFF6F0] p-[20px] rounded-[8px] transition-all hover:drop-shadow-[0px_10px_20px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8]">
                        <img src="<?= base_url() ?>assets/images/icon/islami.png" class="max-w-[38px] self-start mb-[15px]" loading="lazy" width="50" height="50" alt="about Image">
                        <div>
                            <h3 class="font-recoleta text-primary text-base capitalize mb-[5px]"> <?= plang('Islamic') ?></h3>
                            <p class="text-[14px]"><?= plang('We present Islamic values ​​by translating in every process that exists as part of Worship to Allah.') ?></p>
                        </div>

                    </div>
                    <div class="mb-[30px] lg:mb-10 border border-[#FFF6F0] p-[20px] rounded-[8px] transition-all hover:drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] hover:bg-[#F5F9F8]">
                        <img src="<?= base_url() ?>assets/images/icon/quality.png" class="max-w-[38px] self-start mb-[15px]" loading="lazy" width="50" height="50" alt="about Image">
                        <div>
                            <h3 class="font-recoleta text-primary text-base capitalize mb-[5px]"><?= plang('Quality') ?></h3>
                            <p class="text-[14px]"><?= plang('Quality becomes a fixed price as a foundation in building future life. We guarantee quality for every job.') ?></p>
                        </div>

                    </div>
                    <div class="mb-[30px] lg:mb-10 border border-[#FFF6F0] p-[20px] rounded-[8px] transition-all hover:drop-shadow-[0px_10px_20px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8]">
                        <img src="<?= base_url() ?>assets/images/icon/trusted.png" class="max-w-[38px] self-start mb-[15px]" loading="lazy" width="50" height="50" alt="about Image">
                        <div>
                            <h3 class="font-recoleta text-primary text-base capitalize mb-[5px]"> <?= plang('Professional') ?></h3>
                            <p class="text-[14px]"><?= plang('Support by a capable team in their field to ensure that every the process from contract to delivery thank the unit is running well.') ?></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- About Us Sectin End -->
<!-- <section class="popular-properties py-[50px] lg:py-[60px]">
    <div class="container">
        <h4 class="font-recoleta text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px]">
            Property Amenities<span class="text-secondary">.</span>
        </h4>

        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 px-[15px] mx-[-15px] mt-[40px]">
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
        </ul>
    </div>
</section> -->

<?php $this->load->view('frontend/utilities/partner'); ?>