<!-- header.php -->
<?php include 'includes/header2.php'; ?>

        <div class="container">
            <div class="inner-banner">
                <div class="row">
                    <div class="col-md-6">
                    <h2>Do You Need<br>
                            <span class="animate-typing" data-animate-loop="true" data-type-speed="200"
                                data-type-delay="100" data-remove-speed="30" data-remove-delay="900"
                                data-cursor-speed="900">
                                a UI/UX Design?|
                                a Website?|
                                Marketing Support?|
                                a Mobile App?|
                                a Custom Software?|
                            </span>
                        </h2>
                        <p>We’re here to tell your brand story. And our job is to tell your brand story better than
                            others.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/team.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- contact form section -->
        <div class="container">
            <form action="function/mail.php" method="post" class="contact-form">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="text" id="name" name="name" onkeyup="this.setAttribute('value', this.value);"
                                value="" required><label for="name">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="email" id="email" name="email"
                                onkeyup="this.setAttribute('value', this.value);" value="" required><label
                                for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="text" id="company" name="company"
                                onkeyup="this.setAttribute('value', this.value);" value="" required><label
                                for="company">Company</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="input-field">
                            <input type="tel" name="phone" id="phone" onkeyup="this.setAttribute('value', this.value);"
                                value="" required><label for="phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-field">
                            <textarea name="message" id="message" rows="6"
                                onkeyup="this.setAttribute('value', this.value);" value="" required></textarea><label
                                for="message">Your message</label>
                        </div>
                    </div>
                </div>
                <div class="text-md-right">
                    <button type="submit" name="btn-send" class="primary-btn" role="button">Send Message</button>
                </div>
            </form>
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
                        <iframe
                            src="https://maps.google.com/maps?q=DIT%20Project%2C%20Merul%20Badda&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
                                        src="assets/images/up-labs.svg" alt="uplabs"></i></a></li>
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


<!-- footer.php -->
<?php include 'includes/footer.php'; ?>