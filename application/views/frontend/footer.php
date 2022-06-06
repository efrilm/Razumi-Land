<section class="widget-section  padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="widget-content">
                    <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo/<?= $logo ?>" alt="<?= $logo ?>"></a>
                    <p><?= plang('Razumi Land is a property development service company that was born as a form of commitment to contribute to development and sales with sharia concepts in accordance with Islamic law') ?></p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 sm-padding">
                <div class="widget-content">
                    <h4><?= plang('Company') ?></h4>
                    <ul class="widget-links">
                        <li><a href="<?= plang('about') ?>"><?= plang('About Us') ?></a></li>
                        <li><a href="<?= plang('contact') ?>"><?= plang('Contact Us') ?></a></li>
                        <li><a href="<?= plang('property') ?>"><?= plang('Properties') ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="widget-content">
                    <h4><?= plang('Address') ?></h4>
                    <p><?= $address ?></p>
                    <span><?= $email ?></span>
                    <span><?= $no_phone ?></span>
                    <span><?= $no_whatsapp ?></span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="widget-content">
                    <h4>Newslatter Subscription</h4>
                    <p>Subscribe and get 10% off from our <br>architecture company.</p>
                    <div class="subscribe-box clearfix">
                        <div class="subscribe-form-wrap">
                            <form action="#" class="subscribe-form">
                                <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
                                <button type="submit" class="submit-btn">Subscribe</button>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.widget-section-->

<footer class="footer-section align-center">
    <div class="container">
        <p>&copy; 2022 All Right Reserved</p>
    </div>
</footer><!-- /.footer-section -->