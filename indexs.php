<!doctype html>
<html lang="zxx">

<head>
    <?php
    include 'include/header-script.php';
    ?>
    <title>Esolace Tech - Technology & IT Services</title>
    <link href="css/main.css" rel="stylesheet">
</head>
<style>
    .think {
        border-radius: 10px;
    }

    .thinnk {
        border-radius: 10px;
    }

    .img12 img {
        max-width: 70%;
        border-radius: 80px;
    }

    .hoveer {
        padding: 15px;
        border-radius: 35px;
        margin: auto;
        width: 100%;
        height: 100%;
        background-color: #411855;
        color: white;
    }

    .col-sm-12 {
        padding: 20px;
    }

    #sen {
        display: flex;
        justify-content: end;
        align-items: center;
    }
</style>

<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>


    <?php
    include 'include/header-allsocial.php';
    include 'include/menu-index.php';

    ?>



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
    <BR></BR>


    <div class="banner-area-two">
        <div class="container-fluid">
            <div class="container-max">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="banner-content">
                            <h1 id="home_title">Unlock the new approach to grow digitally </h1>
                            <p id="home_description">
                                Esolace offers smart, cutting-edge tech solutions to businesses worldwide, accomplishing
                                challenging objectives with innovation. We bring you amazing products that bridge the
                                gap between your imagination and technology.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner-img">
                            <img id="home_img" src="assets/images/home-three/home-three-img.png" alt="Images">
                            <div class="banner-img-shape">
                                <img src="assets/images/home-three/home-three-shape.png" style="color: blue;" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <BR></BR>
        <BR></BR>

        <div class="container">
            <div class="banner-sub-slider owl-carousel owl-theme">
                <div class="banner-sub-item">
                    <img src="assets/images/home-three/home-three-sub1.jpg" alt="Images">
                    <div class="content">
                        <h3 class="satisfied_clients"></h3>
                        <span>Satisfied Clients</span>
                    </div>
                </div>
                <div class="banner-sub-item">
                    <img src="assets/images/home-three/home-three-sub2.jpg" alt="Images">
                    <div class="content">
                        <h3 class="country_worldwide"></h3>
                        <span>Country Worldwide</span>
                    </div>
                </div>
                <div class="banner-sub-item">
                    <img src="assets/images/home-three/home-three-sub3.jpg" alt="Images">
                    <div class="content">
                        <h3 class="projects_completed"></h3>
                        <span>Project Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="process-section" id="our-process">
        <div class="container agile-sec">
            <div class="col-md-7 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                <h2>Agile software
                    development process</h2>
                <p>Designed for remote cooperation’s</p>
            </div>



            <svg style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <symbol id="icon-active" viewBox="0 0 37 32">
                        <path d="M16.888 30.415c0.756 1.293 2.626 1.293 3.382 0l16.068-27.467c0.764-1.306-0.178-2.948-1.691-2.948h-32.136c-1.513 0-2.455 1.642-1.691 2.948l16.068 27.467z">
                        </path>
                    </symbol>
                </defs>
            </svg>

            <div class="container-fluid row">
                <ul class="nav nav-tabs nav-justified wow fadeInDown row" role="tablist" style="visibility: visible; animation-name: fadeInDown;">

                    <li class=" col-lg-3 col-md-6 col-sm-6">
                        <a href="#Iterative" aria-controls="Iterative" role="tab" data-bs-toggle="tab">
                            Iterative<br>
                            <svg class="icon-active">
                                <use xlink:href="#icon-active"></use>
                            </svg></a>
                    </li>



                    <li class="col-lg-3 col-md-6 col-sm-6">
                        <a href="#Quality-driven" aria-controls="Quality-driven" role="tab" data-bs-toggle="tab">Quality-driven<br>
                            <svg class="icon-active">
                                <use xlink:href="#icon-active"></use>
                            </svg></a>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-6">
                        <a href="#Scalable" aria-controls="Scalable" role="tab" data-bs-toggle="tab">
                            Scalable<br>
                            <svg class="icon-active">
                                <use xlink:href="#icon-active"></use>
                            </svg></a>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-6">
                        <a href="#Cooperative" aria-controls="Cooperative" role="tab" data-bs-toggle="tab">Partnership<br>
                            <svg class="icon-active">
                                <use xlink:href="#icon-active"></use>
                            </svg></a>
                    </li>
                </ul>
            </div>

            <!-- Tab panes -->
            <div class="tab-content wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">





                <div role="tabpanel" class="tab-pane active" id="Iterative">
                    <div class="container row">
                        <div class="col-lg-5 ">
                            <h4>Iterative &amp; Incremental</h4>
                            <p><span>To improve the quality of a product and optimize costs.</span></p>
                            <p>To improve the quality of a product and optimize costs.</p>
                            <p><i class="fa fa-check-circle"></i> Flexibility</p>
                            <p><i class="fa fa-check-circle"></i> Risk reduction</p>
                            <p><i class="fa fa-check-circle"></i> Higher quality</p>
                        </div>
                        <style>
                            /* .col-md-12 {
                                    width: 70%;
                                } */
                        </style>

                        <div class="col-lg-7 col-md-12">
                            <section class="services">
                                <div class="circle--slider">
                                    <div class="rotate--circle">
                                        <ul class="circle--rotate count9 disable-hover" id="circle--rotate" style="height: 320px; transform: rotate(-5733.67deg);">
                                            <li class="block">
                                                <div class="icon">1<span> </span></div>
                                            </li>
                                            <li class="block">
                                                <div class="icon">2<span> </span></div>
                                            </li>
                                            <li class="block">
                                                <div class="icon">3<span> </span></div>
                                            </li>
                                            <li class="block">
                                                <div class="icon">4<span> </span></div>
                                            </li>
                                            <li class="block">
                                                <div class="icon">5<span> </span></div>
                                            </li>
                                            <li class="block">
                                                <div class="icon">6<span> </span></div>
                                            </li>
                                            <li class="block">
                                                <div class="icon">7<span> </span></div>
                                            </li>
                                            <li class="block">
                                                <div class="icon">8<span> </span></div>
                                            </li>

                                        </ul>
                                        <div class="animate-wrapper" style="height: 320px;">
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Start of the project</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Planning</h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Analysis &amp; Design</h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Development</h4>

                                                                (increments).</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Testing</h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Deployment</h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Evaluation</h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">
                                                                <h4>Next iteration</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="animate active">
                                                <div class="animate-img">
                                                    <div class="animate-img__in" data-image="img/logo-color.svg" style="background-image: url(&quot;img/logo-color.svg&quot;);">
                                                        <div class="animate-more">
                                                            <div class="animate-title">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- <div class="prev"><span>PREV</span></div>
      <div class="next"><span>NEXT</span></div> -->
                                    </div>
                                </div>
                            </section>
                        </div>


                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="Quality-driven">
                    <div class="container">
                        <div class='row'>
                            <div class="col-md-12">
                                <h4>Quality-driven</h4>
                                <p><span style="color:#42c6c1;">To make technology your competitive advantage.</span></p>
                            </div>


                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd1.svg" class="img-responsive">
                                    <h4>Project planning &amp; control</h4>
                                    <p style="color:#42c6c1;">Scope, milestones, priorities, estimation, reporting</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd2.svg" class="img-responsive">
                                    <h4>Standards &amp; processes</h4>
                                    <p style="color:#42c6c1;">Code Coverage, Quality Gates, Git Flow</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd3.svg" class="img-responsive">
                                    <h4>Testing Levels</h4>
                                    <p style="color:#42c6c1;">Unit, integration, system, and end-to-end testing</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd4.svg" class="img-responsive">
                                    <h4>CI/CD</h4>
                                    <p>Executed with Azure DevOps or According to the customer environment</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd5.svg" class="img-responsive">
                                    <h4>Code reviews</h4>
                                    <p>Always done by at least two other team members</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd6.svg" class="img-responsive">
                                    <h4>Automated tests</h4>
                                    <p>For the most important parts of business logic</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd7.svg" class="img-responsive">
                                    <h4>Code quality</h4>
                                    <p>SOLID, Code Style, Version Control</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="captions">
                                    <img src="img/qd8.svg" class="img-responsive">
                                    <h4>Cloud solutions</h4>
                                    <p>Scalable servers set up on Azure or AWS or tailored according to the customer needs</p>
                                </div>
                            </div>


                        </div>
                    </div>



                </div>
                <div role="tabpanel" class="tab-pane" id="Scalable">
                    <div class="container">
                        <div class="col-md-6">
                            <h4>Scalable</h4>
                            <p><span>To speed up quickly whenever you need it.</span></p>

                        </div>
                        <div class="row">
                            <DIV CLASS="col-md-12 col-lg-6"> <img src="img/scale.svg" class="img-responsive mt-2" style="width: 80%;"></DIV>
                            <br><br>


                            <div class="col-md-6">
                                <div class="captions" style="margin-top: 10px;">
                                    <img src="img/scc1.svg" class="img-responsive">
                                    <h4>We think of it like this</h4>
                                    <p>With Vizion Systems Approach, you can easily scale up the team, development velocity and the software itself.</p>
                                </div>
                                <div class="captions">
                                    <img src="img/scc2.svg" class="img-responsive">
                                    <h4>Scaling up your team</h4>
                                    <p>You can start small and scale the team along with your business.</p>
                                </div>
                                <div class="captions">
                                    <img src="img/scc2.svg" class="img-responsive">
                                    <h4>Scaling up your team</h4>
                                    <p>You can start small and scale the team along with your business.</p>
                                </div>



                                <div class="captions">
                                    <img src="img/scc3.svg" class="img-responsive">
                                    <h4>Scalable infrastructure in cloud</h4>
                                    <p>Our DevOps engineers will help you build secure and scalable infrastructure, so your software is ready to grow with your business.</p>
                                </div>
                            </div>





                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="Cooperative">
                    <div class="container row">
                        <div class="col-sm-12 col-md-6">
                            <h4>Partnership</h4>
                            <p><span>We become part of your team.</span></p>

                            <p>Vizion Systems Approach works perfectly when it comes to remote collaboration.</p>

                            <p>No matter what, you can't create an amazing software product without close cooperation between the Product Owner and the development team.</p>

                            <p>Therefore,&nbsp;we see you as a crucial member of our Agile Team.</p>

                            <p>That means you can expect full transparency in the project. As a Product Owner, you are always updated about the status of the development and have full control over the product.</p>

                            <p>We invite you to use our tools &amp; channels, development environments and whatever we need to ship the product successfully Together.</p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <img src="img/globe.svg" class="img-responsive center-block mt-8" style="width: 60%">
                        </div>
                    </div>
                </div>


            </div>

    </section>
    <br>
    <br>


    <div class="build-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="build-content">
                        <div class="section-title">
                            <span id="contact_description">We Carry More Than Just Good Coding Skills</span>
                            <h2 id="contact_title">Let's Build Your Website!</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="build-btn-area">
                        <a href="contact.php" class="hoveer">Contact Us </a>
                    </div>
                </div>
            </div>
            <div class="row pt-45">
                <div class="col-lg-12">
                    <div class="img12 d-none d-md-block"><img src="img\cms\contact.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="fluid" class="container-fluid">
        <div class='row '>
            <div class='col-4 d-none d-md-block '><img class="think" src="img\cms\png.jpg" alt=""></div>
            <div id="sen" class='col-md-8 col-sm-12 '><img class="thinnk" src="img\cms\website work1.jpg" alt=""></div>


        </div>
    </div>
    <div id="fluid" class="container-fluid">
        <div class='row '>
            <div class='col-md-8 col-sm-12'><img class="think" src="img\cms\website work.jpg" alt=""></div>
            <div class='col-4 d-none d-md-block'><img src="img\cms\png1.jpg" alt=""></div>



        </div>
    </div>







    <!--client area--->
    <!--end client area--->
    <div class="brand-area-two ptb-100">
        <div class="container">
            <div id="brands" class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style1.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style2.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style3.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style4.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style5.png" alt="Images">
                </div>
                <div class="brand-item">
                    <img src="assets/images/brand-logo/brand-style3.png" alt="Images">
                </div>
            </div>
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
    load_home_page();
</script>
<script type="text/javascript">
    $('.banner').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["", ""],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('.clients-list').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoPlayTimeout: 1000,
        autoPlayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    })
    var selector = '.navbar-nav li';

    $(selector).on('click', function() {
        $(selector).removeClass('active');
        $(this).addClass('active');
    });

    /*  var i = 0;
var txt = 'Intelligent Workflow for the Modern Businesses'; 
var speed = 50; 

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("bannertext").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

window.onload = function() {
typeWriter();
}*/

    (function(e) {
        e.fn.circle = function(t) {
            var n = e.extend({
                speed: "5000"
            }, t);
            return this.each(function() {
                function t() {
                    var e = i.find("li.block.active").index();
                    c.removeClass("active"), c.eq(e).addClass("active")
                }

                function o() {
                    var n;
                    i.addClass("disable-hover"), i.stop(!0, !0).animate({
                        rotatedeg: p.deg += p.step
                    }, {
                        duration: 400,
                        step: function(t) {
                            t >= 360 ? t -= 360 : t <= -360 && (t += 360), e(this).css("transform", "rotate(" + t + "deg)"), e(this).css("-webkit-transform", "rotate(" + t + "deg)")
                        },
                        complete: function() {
                            p.active = i.find("li.active").removeClass("active"), "right" == p.direction && p.step == d && (p.active.prev() && p.active.prev().length ? (n = p.active.prev().index(), p.active.prev().addClass("active")) : (p.active.siblings(":last-child").addClass("active"), n = 9)), "left" == p.direction && p.step == u && (p.active.next() && p.active.next().length ? (n = p.active.next().index(), p.active.next().addClass("active")) : (p.active.siblings(":first-child").addClass("active"), n = 0)), i.is(":animated"), i.removeClass("disable-hover"), t()
                        }
                    }, "ease")
                }

                function r() {
                    i.addClass("disable-hover"), i.stop(!0, !0).animate({
                        rotatedeg: p.deg += p.step
                    }, {
                        duration: 400,
                        step: function(t) {
                            t >= 360 ? t -= 360 : t <= -360 && (t += 360), e(this).css("transform", "rotate(" + t + "deg)"), e(this).css("-webkit-transform", "rotate(" + t + "deg)")
                        },
                        complete: function() {
                            p.active = i.find("li.active"), i.is(":animated"), i.removeClass("disable-hover")
                        }
                    }, "ease")
                }
                var i = e(this),
                    s = i.find("li").length,
                    a = i.find(" > li .icon"),
                    l = "count" + s,
                    u = 0,
                    c = i.next().find(".animate"),
                    p = {
                        duration: n.speed,
                        deg: 0,
                        step: u,
                        active: i.find("li.active"),
                        direction: "left"
                    };
                switch (s) {
                    case 10:
                        u = -36;
                        break;
                    case 9:
                        u = -40;
                        break;
                    case 8:
                        u = -45;
                        break;
                    case 7:
                        u = -51.5;
                        break;
                    case 6:
                        u = -60;
                        break;
                    case 5:
                        u = -72;
                        break;
                    case 4:
                        u = -90;
                        break;
                    case 3:
                        u = -120;
                        break;
                    case 2:
                        u = -180;
                        break;
                    case 1:
                        u = -360
                }
                i.addClass(l);
                var d = u - 2 * u;
                i.find("> li").first().addClass("active"), i.find("> li").first().find("a").attr("href"), c.eq(0).addClass("active"), e(a).on("click", function() {
                    var n = e(this).parent().index() - i.find("li.active").index();
                    i.children("li").removeClass("active"), e(this).parent().addClass("active"), p.step = -n * d, n * d >= 288 && (p.step = -n * d + 360), n * d <= -288 && (p.step = -n * d - 360), r(), p.step = u, p.direction = "left", t()
                });
                var f = i.parent().find("div.next"),
                    h = i.parent().find("div.prev");

                setInterval(function() {
                    i.is(":animated") || (p.direction = "left", p.step = u, o()),
                        i.is(":animated") || (p.direction = "right", p.step = d, o())

                }, 5000);



            })
        }
    }(jQuery));


    $(function() {
        //Background image
        $('div').each(function() {
            var url = $(this).attr('data-image');
            if (url) {
                $(this).css('background-image', 'url(' + url + ')');
            }
        });

        $('section').each(function() {
            var url = $(this).attr('data-image');
            if (url) {
                $(this).css('background-image', 'url(' + url + ')');
            }
        });

        // Service Auto height circle 
        function autoHeightCircle() {
            var circle = $('.circle--rotate'),
                circleInner = $('.animate-wrapper'),
                circleH = circle.width(),
                circleInnerH = circleInner.width();
            circle.height(circleH);
            circleInner.height(circleInnerH);
        }

        $("#circle--rotate").circle();
        autoHeightCircle();
        $(window).resize(function() {
            autoHeightCircle();
        });
    });
</script>