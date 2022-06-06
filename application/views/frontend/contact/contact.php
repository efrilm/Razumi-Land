<section class="contact-section bg-dark padding">
    <div class="dots"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            <div class="col-md-6 padding-15">
                <div class="contact-info">
                    <h2><?= plang('Get in touch with us') ?> & <br><?= plang('send us message today') ?>!</h2>
                    <p><?= plang('Razumi Land is a property development service company that was born as a form of commitment to contribute to development and sales with sharia concepts in accordance with Islamic law') ?></p>
                    <h3><?= $address ?></h3>
                    <h4><span>Email:</span> <?= $email ?> <br> <span>Phone:</span> <?= $no_phone ?> <br> <span>No. Whatsapp:</span> <?= $no_whatsapp ?> </h4>
                </div>
            </div>
            <div class="col-md-6 padding-15">
                <div class="contact-form">
                    <form action="<?= base_url('contact/sendContact') ?>" method="post" id="ajax_form" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit"><?= plang('Send Message') ?></button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/.contact-section-->