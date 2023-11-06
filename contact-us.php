<!-- Header File -->
<?php $current_page_url = "https://avtarspace.com/contact-us";
$title = 'AST | Contact Us';
include_once 'header.php'; ?>
<!-- Header File -->
<!--===============PAGE CONTENT ==============-->
<div id="content" class="site-content">
    <section class="">
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row mb-4 text-center">
                <div class="title_sections ">
                    <div class="content_box_cn style_one">
                        <div class="">
                            <h2 class="">Contact us</h2>
                            <div class="pd_bottom_10"></div>
                        </div>
                    </div>
                    <div class="before_title fs-5">Send us a message and we'll get back to you shortly</div>
                </div>
            </div>
            <div class="row border rounded-3 p-5">
                <div class="col-xl-12 col-lg-12 mb-5 mb-lg-0 mb-xl-0">
                    <form action="include/thank-you.php" method="POST" class="mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="InputName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control_input" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="InputContact" class="form-label">Contact No.</label>
                                    <input type="number" name="phone" class="form-control_input" placeholder="Enter your phone no." required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control_input" placeholder="Hello@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="InputAddress" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control_input" placeholder="Your Address" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <label for="customRange1" class="form-label">Example range</label>
                                <input type="range" class="form-range" id="customRange1"> -->
                                <div class="mb-3">
                                    <label for="InputBudget" class="form-label">Project Budget : </label>
                                    <input type="text" id="put" placeholder="Example  :   $2000" class="form-control_input">
                                    <input type="range" min="5000" max="50000" value="50" name="budget" id="get" class="form-control_input" onchange="budgetValue()" onmousemove="budgetValue()" required>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                            </div>
                        </div>
                        <div class="row" style="margin-top: -50px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="InputMessage" class="form-label">Message</label>
                                    <input type="text" class="form-control_input" name="message" placeholder="Start typing here..." required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <button type="submit" name="submit" class="btn-hover-my color-3" style="margin-top: 10px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
    </section>
    <section class="newsteller style_one bg_light_1">
        <!--===============spacing==============-->
        <div class="pd_top_40"></div>
        <!--===============spacing==============-->
        <div class="auto-container">
            <div class="row">
                <div class="footer_widgets wid_tit style_two">
                    <div class="">
                        <h2 class="">Our Office</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <img src="assets\images\footer\india-img.png" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <img src="assets\images\footer\singapore-img.png" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <img src="assets\images\footer\england-img.png" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <img src="assets\images\footer/Romania.png" alt="">
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_40"></div>
        <!--===============spacing==============-->
    </section>

</div>

<script>
    function budgetValue() {
        var get = document.getElementById("get").value;
        document.getElementById('put').value = get;
    }
</script>

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
        color: #000 !important;
        font-weight: 200;
        width: 75% !important;
        background: none !important;
        border: none !important;
        outline: none !important;
        border-bottom: 1px solid #000 !important;
        border-radius: 0px !important;
        padding: 0px !important;
    }

    .ac-c {
        background: var(--primary-color-one);
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
        color: #000;

    }

    .contact_card .card-title {
        color: #000;
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
        color: #000;
        font-size: 0.9rem;
    }
</style>


<!--===============PAGE CONTENT END==============-->
</div>
<!-- Footer  Start -->
<?php include_once 'footer.php'; ?>
<!-- Footer  End -->