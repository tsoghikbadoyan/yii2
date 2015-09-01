<div class="content-block" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 blog-post">

                <h2 class="footer-block">Have a question</h2>

                <p>Praesent lacinia dapibus, accumsan vesti bulum. Pellen tesque molestie mollis.</p>

                <p>Mauris nec ligula dui, fermentum nisl ut magna dolor, rhoncus wisi. In lacus sagittis luctus, nisl
                    eros, sit amet tempor et, accumsan eget, pede. Suspendisse est. Ut rhoncus eu, pede. Vestibulum ante
                    ipsum dolor lorem, iaculis mi. Pellentesque eu urna eget dolor. Duis luctus a, dolor. Duis ac
                    sapien.
                </p>

                <p>Estibulum dapibus, maurimalesfames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi.
                    Aliquam erat ac ipsum. Integer aliquam purus ultricies gravida vitae...</p>
            </div>
            <div class="col-sm-4 blog-post">
                <h2 class="footer-block">Leave us a message</h2>

                <form class="" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-white" id="subject" placeholder="Your Name"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-white" id="exampleInputEmail2"
                               placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form-control-white" placeholder="Write Something"
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="text-center btn btn-o-white" value="Say Hello">
                    </div>
                </form>
            </div>
            <div class="col-sm-4 blog-post">

                <h2 class="footer-block">Contact Details</h2>
                <ul>
                    <li class="address-sub"><i class="fa fa-map-marker"></i>Office Address</li>
                    <p>
                        Blabla Parkway, P.o Box 353 Mountain View. United States of America.
                    </p>
                    <li class="address-sub"><i class="fa fa-phone"></i>Phone</li>
                    <p>
                        Local: 1-800-123-hello<br>
                        Mobile: 1-800-123-hello
                    </p>
                    <li class="address-sub"><i class="fa fa-envelope-o"></i>Email Address</li>
                    <p>
                        <a href="mailto:info@themewagon.com">info@themewagon.com</a><br>
                        <a href="http://www.themewagon.com/">www.themewagon.com</a>
                    </p>


                </ul>
                <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="content-block footer-bottom" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">&copy; Copyright Avada Plus 2015</div>
            <div class="col-xs-6 text-right">Theme by <a href="http://www.themewagon.com/"
                                                         target="_blink">ThemeWagon</a></div>
        </div>
    </div>
</div><!-- #footer -->

</div><!--/#wrapper-->


<script src="learn/js/jquery-2.1.3.min.js"></script>
<script src="learn/js/jquery-migrate-1.2.1.min.js"></script>
<script src="learn/js/bootstrap.js"></script>
<script src="learn/js/jquery.actual.min.js"></script>
<script src="learn/js/jquery.scrollTo.min.js"></script>
<script src="learn/js/script.js"></script>
<script src="learn/js/smoothscroll.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        $(window).scroll(function () {

            console.log("asdf");

            if ($(window).scrollTop() > 100) {

                $('.top-header').addClass('shows');

            } else {

                $('.top-header').removeClass('shows');

            }
            ;
        });

    });

    jQuery('.scroll').on('click', function (e) {
        e.preventDefault()

        jQuery('html, body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1500);
    });
</script>

</body>
</html>