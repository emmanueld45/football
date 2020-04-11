<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="f-bg-w3l">
            <div class="col-md-4 w3layouts_footer_grid">
                <h2>Contact <span>Information</span></h2>
                <ul class="con_inner_text">
                    <li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, <label> New York City.</label></li>
                    <li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
                    <li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
                </ul>

                <ul class="social_agileinfo">
                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 w3layouts_footer_grid">
                <h2>Subscribe <span>Newsletter</span></h2>
                <p>By subscribing to our mailing list you will always get latest news from us.</p>
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                    <button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                    <div class="clearfix"> </div>
                </form>
            </div>
            <div class="col-md-4 w3layouts_footer_grid">
                <h3>Latest <span>Events</span></h3>
                <ul class="con_inner_text midimg">
                    <li><a href="#"><img src="images/g5.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="images/g6.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="images/g7.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="images/g8.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="images/g9.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="images/g10.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="images/g12.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="images/g11.jpg" alt="" class="img-responsive" /></a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <p class="copyright">© 2018 Football Club. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
</div>
<!-- //footer -->

<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- //js -->
<!-- owl carousel -->
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay: true,
            items: 3,
            itemsDesktop: [991, 2],
            itemsDesktopSmall: [414, 4]

        });
    });
</script>
<!-- //owl carousel -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>

<script>
    $(document).ready(function() {


        // toggle menu script

        // $(".menu-container").hide();


        $(".menu-toggle-open-btn").click(function() {
            $(".menu-toggle-close-btn").show();
            $(".menu-toggle-open-btn").hide();
            $(".menu-container").slideDown();
        });

        $(".menu-toggle-close-btn").click(function() {
            $(".menu-toggle-close-btn").hide();
            $(".menu-toggle-open-btn").show();
            $(".menu-container").slideUp();
        });



        /* 
        // scroll to bio
        $('#bio-btn').click(function() {
            $('html,body').animate({
                scrollTop: $("#bio").offset().top
            }, 800);
        });

    });

    // scroll to info
    $('#info-btn').click(function() {
        $('html,body').animate({
            scrollTop: $("#info").offset().top
        }, 800);
    });

    */


        // profile btn start 
        $(".profile-btn").click(function() {
            $(".profile-btn").css("color", "orange");
            $(".profile-btn").css("font-weight", "600");

            $(".social-btn").css("color", "grey");
            $(".social-btn").css("font-weight", "normal");

            // container
            $(".profile-details-container").fadeIn();
            $(".social-details-container").fadeOut();
            // alert("profile")
        });
        // profile btn end



        // social btn start
        $(".social-btn").click(function() {
            //css
            $(".social-btn").css("color", "orange");
            $(".social-btn").css("font-weight", "600");

            $(".profile-btn").css("color", "grey");
            $(".profile-btn").css("font-weight", "normal");

            // container
            $(".social-details-container").fadeIn();
            $(".profile-details-container").fadeOut();
            // alert("social")
        });
        // social btn end







    });
</script>
</body>

</html>