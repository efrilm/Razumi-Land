<!-- Header start -->
<header id="sticky-header" class="fixed left-0 top-[15px] lg:top-[30px] xl:top-[45px] w-full z-10">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="flex flex-wrap items-center justify-between">
                    <a href="<?= base_url() ?>" class="block">
                        <img class="w-full h-full" src="<?= base_url() ?>assets/images/logo/<?= $logo ?>" loading="lazy" width="99" height="46" alt="<?= $logo ?>">
                    </a>
                    <nav class="flex flex-wrap items-center">
                        <ul class="hidden lg:flex flex-wrap items-center font-recoleta text-[16px] xl:text-[18px] leading-none text-black">
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                <a href="<?= base_url('') ?>" class="transition-all hover:text-secondary"><?= plang('Home') ?></a>
                            </li>
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                <a href="<?= base_url('property') ?>" class="transition-all hover:text-secondary"><?= plang('Properties') ?></a>
                            </li>
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                <a href="<?= base_url('about') ?>" class="transition-all hover:text-secondary"><?= plang('About') ?></a>
                            </li>
                            <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                <a href="<?= base_url('contact') ?>" class="transition-all hover:text-secondary"><?= plang('Contact') ?></a>
                            </li>
                        </ul>
                        <ul class="flex flex-wrap items-center">
                            <li class="ml-2 sm:ml-5 lg:hidden">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                    <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

    <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
        <!-- close button start -->
        <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0" aria-label="offcanvas">x</button>
        <!-- close button end -->

        <!-- offcanvas-menu start -->

        <nav class="offcanvas-menu">
            <ul>
                <li class="relative block border-b-primary border-b"><a href="<?= base_url() ?>" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5"><?= plang('Home') ?></a></li>
                <li class="relative block border-b-primary border-b"><a href="<?= base_url('property') ?>" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5"><?= plang('Properties') ?></a></li>
                <li class="relative block border-b-primary border-b"><a href="<?= base_url('about') ?>" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5"><?= plang('About') ?></a></li>
                <li class="relative block border-b-primary border-b"><a href="<?= base_url('contact') ?>" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5"><?= plang('Contact') ?></a></li>
            </ul>
        </nav>
        <!-- offcanvas-menu end -->
    </div>
</div>
<!-- offcanvas-mobile-menu end -->
<!-- Header end -->