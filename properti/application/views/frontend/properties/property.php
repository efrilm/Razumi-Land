<?php $this->load->view('frontend/navbar_all'); ?>

<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] xl:h-[650px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/banner/banner.jpg');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                    <h1 class="font-recoleta text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl">
                        <?= plang('Spreading Residential Benefits for the People') ?>
                    </h1>
                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                        <?= plang('Find Your Dream Home, Your Dream Marketing Team, Your Dream Property Learning Place, Your Dream Business Opportunity') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero section end -->

<!-- Popular Properties start -->
<section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

            <?php foreach ($p as $key => $v) { ?>
                <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                    <div class="relative">
                        <a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="block">
                            <img src="<?= base_url() ?>assets/images/property/<?= $v->property_thumbnail ?>" class="w-full h-full" loading="lazy" width="400" height="266" alt="<?= $v->property_thumbnail ?>">
                        </a>
                    </div>
                    <div class="py-[20px] px-[20px] text-left">
                        <h3><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary"><?= $v->property_name ?></a></h3>
                        <h4><a href="<?= base_url('detail-property/' . $v->property_seo) ?>" class="font-light text-tiny text-secondary "><?= $v->property_address ?></a></h4>
                        <span class="font-light text-sm block"><?= $v->city_name ?> </span>
                        <ul class="flex flex-wrap items-center justify-between text-[12px] mt-[10px] mb-[15px] pb-[10px] border-b border-[#E0E0E0]">
                            <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] ">
                                <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" />
                                </svg>
                                <span><?= $v->number_of_bedroom ?></span>
                            </li>
                            <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] ">
                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" />
                                </svg>
                                <span><?= $v->number_of_bathroom ?></span>
                            </li>
                            <li class="flex flex-wrap items-center">
                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.25 6.98507H12.236L11.1307 4.49805C11.0275 4.26615 10.8592 4.06913 10.6464 3.93083C10.4335 3.79253 10.1851 3.71887 9.93125 3.71875H4.06875C3.81491 3.71888 3.56655 3.79256 3.3537 3.93086C3.14085 4.06916 2.97263 4.26616 2.86937 4.49805L1.76397 6.98507H1.75C1.51802 6.98533 1.29561 7.0776 1.13157 7.24164C0.967531 7.40568 0.875261 7.62809 0.875 7.86007V10.9226C0.875261 11.1546 0.967531 11.377 1.13157 11.541C1.29561 11.705 1.51802 11.7973 1.75 11.7976V12.9062C1.7502 13.0802 1.81941 13.247 1.94243 13.3701C2.06546 13.4931 2.23226 13.5623 2.40625 13.5625H3.9375C4.11149 13.5623 4.27829 13.4931 4.40131 13.3701C4.52434 13.247 4.59355 13.0802 4.59375 12.9062V11.7976H9.40625V12.9062C9.40645 13.0802 9.47566 13.247 9.59869 13.3701C9.72171 13.4931 9.88851 13.5623 10.0625 13.5625H11.5938C11.7677 13.5623 11.9345 13.4931 12.0576 13.3701C12.1806 13.247 12.2498 13.0802 12.25 12.9062V11.7976C12.482 11.7973 12.7044 11.705 12.8684 11.541C13.0325 11.377 13.1247 11.1546 13.125 10.9226V7.86007C13.1247 7.62809 13.0325 7.40568 12.8684 7.24164C12.7044 7.0776 12.482 6.98533 12.25 6.98507ZM3.66885 4.85352C3.70327 4.7762 3.75936 4.71052 3.83033 4.66442C3.90131 4.61831 3.98412 4.59377 4.06875 4.59375H9.93125C10.0159 4.59379 10.0986 4.61835 10.1696 4.66445C10.2406 4.71055 10.2966 4.77622 10.331 4.85352L11.2784 6.98504H2.7215L3.66885 4.85352ZM3.71875 12.6875H2.625V11.7976H3.71875V12.6875ZM11.375 12.6875H10.2812V11.7976H11.375V12.6875ZM12.25 10.9226H1.75V7.86007H12.25V10.9226Z" />
                                    <path d="M2.625 8.96875H4.8125V9.84375H2.625V8.96875Z" />
                                    <path d="M9.1875 8.96875H11.375V9.84375H9.1875V8.96875Z" />
                                    <path d="M7 0.403564L0.4375 3.03849V3.98139L7 1.34649L13.5625 3.98139V3.03849L7 0.403564Z" />
                                </svg>
                                <span><?= $v->number_of_carport ?></span>
                            </li>
                        </ul>

                        <ul>
                            <li class="flex flex-wrap items-center justify-between">
                                <span class="font-recoleta text-base text-primary leading-none">IDR <?= number_format($v->property_price) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- Popular Properties end -->


<!-- Brand section Start-->
<?php $this->load->view('frontend/utilities/partner'); ?>
<!-- Brand section End-->