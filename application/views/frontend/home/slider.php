<div id="main-slider" class="dl-slider">


    <?php foreach ($banner as $key => $v) { ?>
        <div class="single-slide">
            <div class="bg-img kenburns-top-right" style="background-image: url(<?= base_url() ?>assets/images/banner/<?= $v->banner_image ?>)"></div>
            <div class="overlay"></div>
            <div class="slider-content-wrap d-flex align-items-center text-left">
                <div class="container">
                    <div class="slider-content">
                        <div class="dl-caption medium">
                            <div class="inner-layer">
                                <div data-animation="fade-in-right" data-delay="1s">
                                    <?= $v->banner_moto ?>
                                </div>
                            </div>
                        </div>
                        <div class="dl-caption dl-border" data-animation="fade-in-left" data-delay="4s"></div>
                        <div class="dl-caption big">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="2s">
                                    <?= $v->banner_title ?>
                                </div>
                            </div>
                        </div>
                        <div class="dl-caption small">
                            <div class="inner-layer">
                                <div data-animation="fade-in-left" data-delay="3s">
                                    <?= $v->banner_subtitle ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Slide-1-->
    <?php } ?>
</div>
<!--/.slider-section-->