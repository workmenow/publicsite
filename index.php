<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WorkMeNow</title>
    
    <!-- Load Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    <script src="https://use.fontawesome.com/e64f908ce8.js"></script>

    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
    <script>
        $(window).load(function(){
           setTimeout(function(){
               $('#offerModal1').modal('show');
           }, 6000);
        });
    </script>

    <!-- Core CSS -->
    <link href="css/app.css" rel="stylesheet">

</head>

<body id="home">
   
<div class="canvas">
     
<?php include("nav.php"); ?>

<section class="main-intro">
    <div id="carousel-example" class="carousel slide section-bg-img" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
            <li data-target="#carousel-example" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
            <div class="item active work-hire-earn">
                <div class="container">
                    <div class="col-xs-10 col-xs-offset-1 set-height">
                        <div class="center-caption">
                            <h1 class="header-inverse"><span class="italics">Work. Hire. <span class="bold">Earn.</span></span></h1>
                            <p>WorkMeNow brings together businesses and consumers making it easy to connect people with local service providers. Plus, earn residual income through referrals!</p>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <a href="#registerModal1" data-toggle="modal" class="btn btn-block btn-lg btn-primary">I Provide a Service</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#registerModal1" data-toggle="modal" class="btn btn-block btn-lg btn-primary btn-inverse">I Need a Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item drive-with">
                <div class="container">
                    <div class="col-xs-10 col-xs-offset-1 set-height">
                        <div class="center-caption">
                            <h1 class="header-inverse">Drive with WorkMeNow</h1>
                            <p>WorkMeNow offers scheduled and on-demand rides at competitive rates through our nationwide network of trusted drivers. Join the community today and keep 100% of your fare!</p>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <a href="drivers.php" class="btn btn-lg btn-block btn-tertiary">Keep 100% of my fare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item help-give">
                <div class="container">
                    <div class="col-xs-10 col-xs-offset-1 set-height">
                        <div class="center-caption">
                            <h1 class="header-inverse">Help us give back</h1>
                            <p>We believe in putting people first. Earn money while also supporting your local community. Sign up now and help us help you support your charity of choice.</p>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <a href="#registerModal1" data-toggle="modal" class="btn btn-block btn-lg btn-secondary">Sign Up Now</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="charities.php" class="btn btn-block btn-lg btn-secondary btn-inverse">Charity Connect</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="item referral-reward">
                <div class="container">
                    <div class="col-xs-10 col-xs-offset-1 set-height">
                        <div class="center-caption">
                            <h1 class="header-inverse"><i>Share with friends, <strong>earn big!</strong></i></h1>
                            <p>After you sign up you’ll receive a referral code. Share this with your friends and colleagues through email, text and social media and you’ll be on your way to easy residual income.</p>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <a href="#registerModal1" data-toggle="modal" class="btn btn-block btn-lg btn-secondary">SIGN UP AND SHARE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control hidden-sm hidden-xs" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control hidden-sm hidden-xs" href="#carousel-example" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section>

<section class="carousel-tn extra-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">WorkMeNow has options for everyone in the community</h2>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div id="myCarousel" class="carousel fdi-Carousel slide hidden-xs">
                <!-- Carousel items -->
                    <div class="fdi-Carousel slide" id="eventCarousel" data-interval="0">
                        <div class="carousel-inner onebyone-carosel">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="tn-dropshadow">
                                        <a href="drivers.php"><img src="/images/md-home-services1.jpg" class="img-responsive center-block" /></a>
                                        <div class="tn-copy-pad">
                                            <h4>Driving</h4>
                                            <p>Rideshare drivers, drive with WorkMeNow and keep 100% of your fare! <a href="drivers.php">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="tn-dropshadow">
                                        <a href="how-to-earn.php"><img src="/images/md-home-services2.jpg" class="img-responsive center-block" /></a>
                                        <div class="tn-copy-pad">
                                            <h4>Services</h4>
                                            <p>Handyman, delivery, private lessons, household services, babysitting <a href="how-to-earn.php">and more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="tn-dropshadow">
                                        <a href="business.php"><img src="/images/md-home-services3.jpg" class="img-responsive center-block" /></a>
                                        <div class="tn-copy-pad">
                                            <h4>Business</h4>
                                            <p>Helping small businesses and professional services within our community <a href="business.php">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="tn-dropshadow">
                                        <a href="rentals.php"><img src="/images/md-home-services4.jpg" class="img-responsive center-block" /></a>
                                            <div class="tn-copy-pad">
                                            <h4>Short-term rentals</h4>
                                            <p>Going on vacation? Find a home away from home. Also, list your property for shor <a href="rentals.php">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left services-glyph"></span></a>
                        <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right services-glyph"></span></a>
                    </div>
                    <!--/carousel-inner-->
                </div><!--/myCarousel-->
                <div class="carousel fdi-Carousel slide visible-xs"><!--Carousel mobile-->
                <!-- Carousel items -->
                    <div class="fdi-Carousel slide">
                        <div class="carousel-inner onebyone-carosel">
                            <div class="active">
                                <div class="col-sm-4">
                                    <div class="tn-dropshadow">
                                        <a href="#"><img src="/images/md-home-services1.jpg" class="img-responsive center-block" /></a>
                                        <div class="tn-copy-pad">
                                            <h4>Driving</h4>
                                            <p>Rideshare drivers, drive with WorkMeNow and keep 100% of your fare! <a href="#">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="active">
                                <div class="col-sm-4">
                                    <div class="tn-dropshadow">
                                        <a href="#"><img src="/images/md-home-services2.jpg" class="img-responsive center-block" /></a>
                                        <div class="tn-copy-pad">
                                            <h4>Services</h4>
                                            <p>Handyman, delivery, private lessons, household services, babysitting <a href="#">and more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="active">
                                <div class="col-sm-4">
                                    <div class="tn-dropshadow">
                                        <a href="#"><img src="/images/md-home-services3.jpg" class="img-responsive center-block" /></a>
                                        <div class="tn-copy-pad">
                                            <h4>Business</h4>
                                            <p>Helping small businesses and professional services within our community <a href="#">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="active">
                                <div class="col-sm-4 active">
                                    <div class="tn-dropshadow">
                                        <a href="#"><img src="/images/md-home-services4.jpg" class="img-responsive center-block" /></a>
                                            <div class="tn-copy-pad">
                                            <h4>Short-term rentals</h4>
                                            <p>Going on vacation? Find a home away from home. Also, list your property for shor <a href="#">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <!--/carousel-inner-->
                </div><!--/myCarousel-->
            </div>
        </div>
    </div>
</section>


<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-6 text-center">
                    <h3 class="inverse">Are you a Driver?</h3>
                    <p class="tertiary">Keep 100% of your fare</p>
                </div>
                <div class="col-md-3">
                    <a href="drivers.php" class="btn btn-lg btn-block btn-tertiary">Learn more</a>
                </div>
                <div class="col-md-3">
                    <img height="50" src="/images/sm-home-caricon.png" class="img-responsive center-block">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-gray extra-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="secondary">How it works</h2>
                <p class="blurb">Sign up for WorkMeNow to offer your service or skill, find workers and earn cash and credits.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-3">
                        <p class="number secondary">1&nbsp;</p>
                    </div>
                    <div class="col-xs-9">
                        <h5>Work</h5>
                        <p>Tell us what you can offer (home services, rideshares, freelancing, business services and more) Then connect through our community to work and get paid.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-3">
                        <p class="number secondary">2&nbsp;</p>
                    </div>
                    <div class="col-xs-9">
                        <h5>Hire</h5>
                        <p>Hire workers for services you need. Members get up to 25% back for every dollar spent. Join now to lock in bigger earnings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-3">
                        <p class="number secondary">3&nbsp;</p>
                    </div>
                    <div class="col-xs-9">
                        <h5>Earn</h5>
                        <p>Earn residual income from each dollar your referrals earn from working and earn from every dollar they spend on services. Additionally, earn when anyone in the community shops through <a class="secondary" href="affiliates.php">our affiliates.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <a href="#registerModal1" data-toggle="modal" class="btn btn-lg btn-secondary btn-inverse btn-block">Sign up now</a>
            </div>
        </div>
    </div>
</section>   

<section class="why-work-me-now extra-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="primary text-center">Why Work Me Now?</h2>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <p class="blurb">WorkMeNow is the vision of one man to improve on the flex-work economy by allowing the people to benefit from the growth of the company. Our goal is to give back to our members. <a href="about.php">See the vision.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-push-4 text-center">
                <img src="/images/md-home-animatedphone.gif" width="100%" style="max-width:400px;" />
            </div>
            <div class="col-md-4 col-md-pull-4">
                <div class="row buckets">
                    <div class="col-md-3">
                        <img src="/images/sm-home-icon-makemoney.png" width="30px" />
                    </div>
                    <div class="col-md-9">
                        <h5>Make Money</h5>
                        <p>Keep 100% of the fare or billed service, locked in for life. <a class="secondary" href="how-to-earn.php">Learn how.</a></p>
                    </div>
                </div>
                <div class="row buckets">
                    <div class="col-md-3">
                        <img src="/images/sm-home-icon-residualincome.png" width="20px" />
                    </div>
                    <div class="col-md-9">
                        <h5>Residual Income</h5>
                        <p>When people sign up with your referral code, earn as they work and spend with Work Me Now. <a class="secondary" href="rewards.php">Learn how.</a></p>
                    </div>
                </div>
                <div class="row buckets">
                    <div class="col-md-3">
                        <img src="/images/sm-home-icon-creditback.png" width="30px" />
                    </div>
                    <div class="col-md-9">
                        <h5>Credit Back</h5>
                        <p>Receive up to 25% back for money spent on services. <a class="secondary" href="#creditModal1" data-toggle="modal">Learn how.</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row buckets">
                    <div class="col-md-3">
                        <img src="/images/sm-home-icon-affiliatepartners.png" width="25px" />
                    </div>
                    <div class="col-md-9">
                        <h5>Affiliate Partners Program</h5>
                        <p>Earn money back when you shop through our affiliate partners. The more the Work Me Now Community shops the more you earn. <a class="secondary" href="affiliates.php">Start shopping.</a></p>
                    </div>
                </div>
                <div class="row buckets">
                    <div class="col-md-3">
                        <img src="/images/sm-home-icon-charityconnect.png" width="25px" />
                    </div>
                    <div class="col-md-9">
                        <h5>Charity Connect</h5>
                        <p>Helping connect Charities with the Work Me Now community. <a class="secondary" href="charities.php">Learn more.</a></p>
                    </div>
                </div>
                <div class="row buckets">
                    <div class="col-md-3">
                        <img src="/images/sm-home-icon-thepeople.png" width="35px" />
                    </div>
                    <div class="col-md-9">
                        <h5>The People's Company</h5>
                        <p>A company designed to give everyone a voice and the same business opportunity to prosper with the growth of the company. <a class="secondary" href="about.php">See the vision.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="get-rides extra-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5 col-md-push-6 text-center white-box">
                        <h3 class="h1">Get rides</h3>
                        <p class="blurb">Ride with WorkMeNow and earn credits back for every dollar you spend.</p>
                        <div class="col-xs-8 col-xs-offset-2">
                            <a href="#creditModal1" data-toggle="modal" class="btn btn-lg btn-block btn-primary btn-inverse">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="no-padd testimonials">
    <div class="slide bg-img">
        <div class="container">
            <div class="col-xs-10 col-xs-offset-1 set-height2">
                <div class="center-caption">
                    <h4 class="text-center tertiary">What our community is saying</h4>
                    <p class="blurb italics">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.<br /><span class="bold">George - Dallas, TX</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--PRESS QUOTES SECTION FOR WHEN PR GETS UP AND RUNNING IN THE FUTURE ----> <!--- <section class="press bg-light-gray">-->  
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-10 col-xs-offset-1">-->
<!--                        <img src="http://placehold.it/250x250" width="100%" />-->
<!--                        <p class="quote">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium."</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-10 col-xs-offset-1">-->
<!--                        <img src="http://placehold.it/250x250" width="100%" />-->
<!--                        <p class="quote">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium."</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-10 col-xs-offset-1">-->
<!--                        <img src="http://placehold.it/250x250" width="100%" />-->
<!--                        <p class="quote">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium."</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<?php include("footer.php"); ?>

</div>
<!--END canvas-->
<?php include("modal-register.php"); ?>
<?php include("modal-login.php"); ?>
<?php include("modal-offer.php"); ?>
<?php include("modal-credit-back.php"); ?>


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Bootstrap Javascript -->
<script src="js/bootstrap/transition.js"></script>
<!--<script src="js/bootstrap/affix.js"></script>-->
<!--<script src="js/bootstrap/alert.js"></script>-->
<script src="js/bootstrap/button.js"></script>
<script src="js/bootstrap/carousel.js"></script>
<script src="js/bootstrap/carousel-2.js"></script>
<script src="js/bootstrap/collapse.js"></script>
<script src="js/bootstrap/dropdown.js"></script>
<script src="js/bootstrap/modal.js"></script>
<!--<script src="js/bootstrap/scrollspy.js"></script>-->
<!--<script src="js/bootstrap/tab.js"></script>-->
<!--<script src="js/bootstrap/tooltip.js"></script>-->
<!--<script src="js/bootstrap/popover.js"></script>-->

</body>
</html>