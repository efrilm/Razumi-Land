<?php $this->load->view('frontend/navbar_all'); ?>

<!-- contact form start -->
<section class="py-[80px] lg:py-[120px]">

    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px]">
            <div class="col-span-12">
                <div class="col-span-12 mb-[70px]">
                    <div class="text-center">
                        <span class="text-secondary text-tiny inline-block mb-2"><?= plang('Contact Us') ?></span>
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-[5px]">
                            <?= plang('Get in Touch') ?><span class="text-secondary">.</span></h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid col-span-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">

            <div class="flex flex-wrap hover: drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px]">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="<?= base_url() ?>assets/images/icon/map.png" width="40" height="55" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-recoleta leading-none text-[28px] text-primary mb-[10px]"><?= plang('Address') ?> <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]"><?= $address ?></p>
                </div>
            </div>

            <div class="flex flex-wrap hover: drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px]">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="<?= base_url() ?>assets/images/icon/phone.png" width="46" height="46" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-recoleta leading-none text-[28px] text-primary mb-[10px]"><?= plang('Call us') ?> <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">
                        <?= $no_phone ?>
                        <?= $no_whatsapp ?>
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap hover: drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] xl:pl-[65px]">
                <img class="self-center mr-[10px] sm:mr-[20px] lg:mr-[10px] xl:mr-[20px] sm:mb-[15px] lg:mb-0" src="<?= base_url()  ?>assets/images/icon/mail.png" width="46" height="52" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-recoleta leading-none text-[28px] text-primary mb-[10px]"><?= plang('Email us') ?> <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">
                        <a href="mailto:<?= $email ?>" class="hover:text-secondary"><?= $email ?></a>

                    </p>
                </div>
            </div>

        </div>


    </div>
</section>
<!-- contact form end -->