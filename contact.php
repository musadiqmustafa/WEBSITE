<!doctype html>
<html lang="zxx">

<head>
    <?php
    include 'include/header-script.php';
    ?>
    <title>Contact - Technology & IT Services</title>
</head>

<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <?php include 'include/header-allsocial.php'; ?>
    <?php include 'include/all-menu.php'; ?>
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-close">
                    <span class="search-close-line"></span>
                    <span class="search-close-line"></span>
                </div>
                <div class="search-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Contact Us</h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="assets/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>


    <div class="contact-form-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Let's Send Us a Message Below</h2>
            </div>


            <div class="  row pt-45">
                <div class="col-lg-4">


                    <div class="contact-info mr-20">
                    <h2 > Pakistan Office</h2>
                        
                        <div class="  row pt-45">
                            <div class=" col-lg-12 ">
                               
                                <ul>
                                    <li>
                                        <div class="content">
                                            <i class='bx bx-phone-call'></i>
                                            <h3>Phone Number</h3>
                                            <span id="c_contact_number"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <i class='bx bxs-map'></i>
                                            <h3>Address</h3>
                                            <span id="address"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <i class='bx bx-message'></i>
                                            <h3>Contact Info</h3>
                                            <a id="email" href=""><span class="__cf_email__" data-cfemail="59313c353536192d3c3a313c21773a3634"></span></a>
                                        </div>
                                    </li>

                                </ul>

                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-lg-4">


                    <div class="contact-info mr-20">
                        <h2>UK Office</h2>
                       
                        <div class="  row pt-45">
                            <div class=" col-lg-12 ">
                           
                        <ul>
                            <li>
                                <div class="content">
                                    <i class='bx bx-phone-call'></i>
                                    <h3>Phone Number</h3>
                                    <a id="uk_contact" href=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <i class='bx bxs-map'></i>
                                    <h3>Address</h3>
                                    <span id="uk_address"></span>
                                </div>
                            </li>
                            <li>
                                        <div class="content">
                                            <i class='bx bx-message'></i>
                                            <h3>Contact Info</h3>
                                            <a id="uk_email" href=""><span>musadiqmustafa48@gmail.com</span></a>
                                        </div>
                                    </li>
                           

                        </ul>

                    </div>


                        </div>
                    </div>

                </div>
                




                <div class="col-lg-4">
                    <div class="contact-form">
                        <form action="mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="form-group">
                                        <label>Your Name <span>*</span></label>
                                        <input type="text" name="name" class="form-control" required placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your Email <span>*</span></label>
                                        <input type="email" name="email" class="form-control" required placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your Subject <span>*</span></label>
                                        <input type="text" name="msg_subject" class="form-control" required placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Message <span>*</span></label>
                                        <textarea name="message" class="form-control" cols="30" rows="8" required placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <input type="submit" value="Send Message" class="default-btn btn-bg-two border-radius-50" />



                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.4253866931253!2d67.09482171432124!3d24.917574549104195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338cd760d5c5b%3A0x9210d13cbed707c7!2sNipa!5e0!3m2!1sen!2s!4v1659509319759!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <?php include 'include/footer.php'; ?>




    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/custom.js"></script>

    <script src="assets/js/functions.js"></script>
</body>

</html>
<script>
    load_contact_page();
</script>