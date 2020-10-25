

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Contact with Dgpro | Grow Your Business and Get More Customers Through Digital</title>

    <!-- Dgpro Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Google font 'Poppins' -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Pro 5.13.0 -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- Bootstrap CSS v4.5.3 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- UiKit CSS v3.5.8 -->
    <link rel="stylesheet" href="css/uikit.min.css">
    <!-- Owl Carousel CSS v2.3.4  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Animated CSS v4.1.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Dgpro theme CSS v1 -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <!-- home section start from here -->
    <section id="home" class="home-sec home-sec-inner">

        <!-- animation kits -->
        <div class="home_animation">
            <div class="animation b_one"></div>
            <div class="animation b_two"></div>
            <div class="animation b_three"></div>
            <div class="animation b_four"></div>
            <div class="animation b_five"></div>
            <div class="animation b_six"></div>
            <div class="triangle b_seven" data-parallax='{"x": 20, "y": 150}'><img
                    src="images/animation-kits/polygon-1.svg" alt="poligon svg"></div>
            <div class="triangle b_eight" data-parallax='{"x": 120, "y": -10}'><img
                    src="images/animation-kits/polygon-3.svg" alt="poligon svg"></div>
            <div class="triangle b_nine"><img src="images/animation-kits/polygon-2.svg" alt="poligon svg"></div>
        </div>
        <!-- animation kits end -->

        <!-- navigation bar start -->
        <header uk-sticky="animation: uk-animation-slide-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html"><img src="images/Dgpro-logo.png" alt="Dgpro logo"></a>
                    <button class="navbar-toggler theme-toggler" type="button" uk-toggle="target: #offcanvas-flip">
                        <i class="fad fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse">
                        <div id="menu-center" class="ml-auto">
                            <ul class="navbar-nav nav-list">
                                <li class="nav-item">
                                    <a href="#home" class="active" uk-scroll>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about-us" uk-scroll>About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#services" uk-scroll>Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#portfolio" uk-scroll>Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="secondary-btn" href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu offcanvas -->
                    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                        <div class="uk-offcanvas-bar">

                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <ul class="navbar-nav nav-list">
                                <li class="nav-item">
                                    <a href="#home" class="active uk-offcanvas-close" uk-close uk-scroll>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about-us" class="uk-offcanvas-close" uk-close uk-scroll>About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#services" class="uk-offcanvas-close" uk-close uk-scroll>Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#portfolio" class="uk-offcanvas-close" uk-close uk-scroll>Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="secondary-btn" href="contact-us.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- navigation bar end -->

        <div class="container">
            <div class="inner-banner">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h2>Do You Need<br>
                            UI/UX Design?</h2>
                        <p>We’re here to tell your brand story. And our job is to tell your brand story better than
                            others.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="images/team.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- contact form section -->
        <div class="container">
            <form action="mail.php" method="post" class="contact-form">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="text" id="name" name="name" onkeyup="this.setAttribute('value', this.value);" value="" required><label for="name">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="email" id="email" name="email" onkeyup="this.setAttribute('value', this.value);" value="" required><label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="text" id="company" name="company" onkeyup="this.setAttribute('value', this.value);" value="" required><label for="company">Company</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="tel" name="phone" id="phone" onkeyup="this.setAttribute('value', this.value);" value="" required><label for="phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-field">
                            <textarea name="message" id="message" rows="6" onkeyup="this.setAttribute('value', this.value);" value="" required></textarea><label for="message">Your message</label>
                        </div>
                    </div>
                </div>
                <div class="text-md-right">
                    <button type="submit" name="btn-send" class="primary-btn" role="button">Send Message</button>
                </div>
            </form>
            <?php 
                $Msg = "";
                    if(isset($_GET['error']))
                {
                    $Msg = " Please Fill in the Blanks ";
                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                }

                if(isset($_GET['success']))
                {
                    $Msg = " Your Message Has Been Sent ";
                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                }
            ?>
        </div>
        <!-- contact form section end -->


    </section>


    <!--  -->
    <!-- footer section start from here -->
    <section class="footer-sec footer-sec-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 bg-light">
                    <div class="gmap">
                        <iframe src="https://maps.google.com/maps?q=DIT%20Project%2C%20Merul%20Badda&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                    <div class="text-center">
                        <hr>
                        <a href="#" class="primary-btn">Get Start</a>
                    </div>
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/dgprostudio" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/DgproStudio" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/dgpro-studio" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.uplabs.com/dgproduct_studio" target="_blank"><i><img
                                        src="images/up-labs.svg" alt="uplabs"></i></a></li>
                        <li><a href="https://www.instagram.com/dgpro.studio" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="https://dribbble.com/dgprostudio" target="_blank"><i
                                    class="fab fa-dribbble"></i></a></li>
                    </ul>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h5>Address</h5>
                                <p>DIT Project, Merul Badda<br>
                                    Dhaka-1212, Bangladesh</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget text-right">
                                <h5>Contact Info</h5>
                                <p>Email: contact@dgpro.studio<br>
                                    Phone: +8801745639584</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copy right -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p><i class="fal fa-copyright"></i> Dgpro Studio 2020. ALL Right Reserved</p>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <a href="#home" uk-scroll>Back on Top <i class="fal fa-angle-up"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!-- footer section end here -->






    <!-- include js files -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.parallax-scroll.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>