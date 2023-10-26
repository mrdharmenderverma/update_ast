<!-- Header File -->
<?php $current_page_url="https://avtarspace.com/contact-us"; $title = 'AST | Contact Us'; include_once 'header.php'; ?>
<!-- Header File -->
<!--===============PAGE CONTENT ==============-->
<div id="content" class="site-content">
    <section class="single_banner style_one" style="background-image: url(assets/images/sliders/slider-3-bg.png)">
        <!--===============spacing==============-->
       <div class="pd_top_90"></div>
       <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="title_sections ">
                    <div class="content_box_cn style_one">
                        <div class="txt_content">
                            <h2 class="">Get in Touch</h2>
                            <div class="pd_bottom_10"></div>
                        </div>
                    </div>
                    <div class="before_title gradient-text">Send us a message and we'll get back to you shortly</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-7 mb-5 mb-lg-0 mb-xl-0">
                    <form action="include/thank-you.php" method="POST" class="mt-5">
                        <div class="mb-3">
                            <label for="InputName" class="form-label">Name</label>
                            <input type="text" name="name"  class="form-control_input" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control_input" placeholder="Hello@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputMessage" class="form-label">Message</label>
                            <input type="text" class="form-control_input" name="message"  placeholder="Start typing here..." required>
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="CheckBox-1" required>
                            <label class="form-check-label" for="CheckBox-1">I would like to receive news and
                                updates from you once in a while</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="CheckBox-2" required>
                            <label class="form-check-label" for="CheckBox-2">I give consent to the processing of my personal data given in the contact <br> form above as well as receiving commercial
                                and marketing communications <br> under the terms and conditions of Exoft <a href="policy.php" class="ac-c">Privacy Policy.</a></label>
                        </div>
                        <div class="mb-3 d-flex" style="">
                            <!--<input type="file" id="upload" hidden />-->
                            <!--<label for="upload" class="Upload_icon"><i class="ri-attachment-fill"></i> Upload File Here</label>-->
                            <!--<input type="submit" class="btn-hover-my color-3" style="margin-left: 70px; margin-top: 10px;">-->
                            <button type="submit" name="submit" class="btn-hover-my color-3" style="margin-top: 10px;">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-1 col-lg-7 mb-5 mb-lg-0 mb-xl-0"></div>

                <div class="col-xl-5 col-lg-5 mb-5 mb-lg-0 mb-xl-0" style="padding-top:75px">
                    <div class="row mb-5" style="margin-top: 2REM;">
                        <div class="contact_card">
                            <img src="assets/images/boy.png" class="card-img-top" alt="..." style="
                            max-width: 40%; margin-top: -193px; margin-left: 225px;">
                            <div class="card-body" style="margin-top: -68px;">
                                <h5 class="card-title">Sibten Umar</h5>
                                <p class="card-sm-text">Sr. Consultant Manager</p>
                                <!--<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting-->
                                <!--    industry.</p>-->
                                <p class="card-text"><i class="ri-mail-fill"></i> info@avtarspace.com </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact_card">
                            <div class="card-body">
                                <h5 class="card-title">Contact Us</h5>
                                <p class="card-text"><i class="fa fa-location-arrow"></i> &nbsp<strong> Registered Address:</strong> 827-830, 8th floor, Gaur City centre, Greater Noida West, Uttar Pradesh - 201301</p>
                                <p class="card-text"><i class="fa fa-location-arrow"></i> &nbsp<strong> Branch Address:</strong> 87 North road, Dorset, England, Poole, BH14 0LT</p>
                                <p class="card-text"><i class="fa fa-location-arrow"></i> &nbsp <strong> Branch Address:</strong> 68 Curcular road, 02-01, Singapore 049422</p>
                                <p class="card-text"><i class="icomoon icon-phone"></i> <a href="tel:+91-9818699556">+91 8398021095, +91 9518268109</a></p>
                                <p class="card-text mb-4"><i class="fa fa-envelope"></i> <a href="mailto:info@avtarspace.com">info@avtarspace.com</a></p>
                                <!--<div class="social_media_v_one style_two">-->
                                <!--    <ul>-->
                                <!--        <li>-->
                                <!--            <a href="#"> <span class="fa fa-facebook"></span>-->
                                <!--                <small>facebook</small>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li>-->
                                <!--            <a href="#"> <span class="fa fa-twitter"></span>-->
                                <!--                <small>twitter</small>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li>-->
                                <!--            <a href="#"> <span class="fa fa-skype"></span>-->
                                <!--                <small>skype</small>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li>-->
                                <!--            <a href="#"> <span class="fa fa-instagram"></span>-->
                                <!--                <small>instagram</small>-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- ============Custom Styling =========== -->


<style>
    .container {
        display: block;
        grid-template-columns: (2, 2fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 7rem;
        grid-row-gap: 1rem;

        grid-gap: 1rfe;
    }

    .box {
        display: inline-block;
        border: 2px solid rgb(253, 244, 253);
        background-color: rgb(228188, 28);
        padding: 10px;
        height: 45px;
        width: 117px;
        font-size: small;
    }

    .form-control_input {
        color: #fff !important;
        font-weight: 200;
        width: 75% !important;
        background: none !important;
        border: none !important;
        outline: none !important;
        border-bottom: 1px solid #fff !important;
        border-radius: 0px !important;
        padding: 0px !important;
    }

    .ac-c {
        background: linear-gradient(309deg, #B96DF4 0%, #DE84DA 35.42%, rgba(155, 153, 254, 0.90) 70.04%, #5BBBD9 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }

    .Upload_icon {
        display: inline-block;
        opacity: 0.699999988079071;
        background: var(--gradient, linear-gradient(309deg, #B96DF4 0%, #DE84DA 35.42%, rgba(155, 153, 254, 0.90) 70.04%, #5BBBD9 100%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: white;
        padding: 0.5rem 0 1.2rem 0;
        font-family: sans-serif;
        border-radius: 0.3rem;
        cursor: pointer;
        margin-top: 1rem;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .contact-image img {
        max-width: 100%;
        height: auto;
    }


    .contact-form {
        flex: 1;
        padding: 20px;
    }

    .contact-form h2 {
        margin-top: 0;
    }

    .contact_card {
        padding: 1rem 2rem;
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background: rgba(255, 255, 255, 0.10);
        background-clip: border-box;
        border-radius: 0.75rem;
        color: #fff;

    }

    .contact_card .card-title {
        color: #fff;
        font-size: 1.7rem;
    }

    .contact_card .card-sm-text {
        background: var(--gradient, linear-gradient(309deg, #B96DF4 0%, #DE84DA 35.42%, rgba(155, 153, 254, 0.90) 70.04%, #5BBBD9 100%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 1rem;
    }

    .card-text {
        color: #fff;
        font-size: 0.9rem;
    }
</style>


<!--===============PAGE CONTENT END==============-->
</div>
<!-- Footer  Start -->
<?php include_once 'footer.php'; ?>
<!-- Footer  End -->