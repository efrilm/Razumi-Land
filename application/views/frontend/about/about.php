<?php $this->load->view('frontend/utilities/about'); ?>

<section class="about-section bg-dark padding">
    <div class="container">
        <div class="row about-wrap d-flex align-items-center">
            <div class="col-lg-6 xs-padding">
                <div class="about-content">
                    <h2>Visi.</h2>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i><?= plang('To become a company that is able to provide superior and affordable housing for all levels of society and contribute to building world civilization') ?>.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 xs-padding">
                <div class="about-content">
                    <h2>Misi.</h2>
                    <ul class="about-list">
                        <li><i class="fas fa-check"></i><?= plang('Making quality products, a comfortable, safe and healthy environment, and affordable for all people to have a residence') ?>.</li>
                        <li><i class="fas fa-check"></i><?= plang('Building the Company\'s components in supporting all the company\'s efforts in providing decent and affordable housing') ?>.</li>
                        <li><i class="fas fa-check"></i><?= plang('Build professional company management and maintain the company\'s sustainable growth, as well as Establish cooperative relationships with business partners that are mutually beneficial and sustainable') ?>.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.about-section-->
<?php $this->load->view('frontend/utilities/services'); ?>