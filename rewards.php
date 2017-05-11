<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WorkMeNow | Referral Rewards</title>
    
    <!-- Load Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Core CSS -->
    <link href="css/app.css" rel="stylesheet">

</head>

<body id="rewards">
   
<div class="canvas">
     
<?php include("nav.php"); ?>

<section class="no-padd main-intro">
    <div class="bg-img">
        <div class="container">
            <div class="col-xs-10 col-xs-offset-1 set-height">
                <div class="center-caption">
                    <h1 class="text-center"><i>Share with friends, <strong>earn big!</strong></i></h4>
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
</section>

<section>
    <div class="container extra-padd">
          <div class="row">
            <div class="col-md-12 headings">
                <h2 class="primary text-center">GET PAID FOR GETTING PEOPLE TO SIGN UP</h2>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <p class="blurb">Imagine this, you get 10 people to sign up and each of those people continue to get 5 more people to sign up each. The next thing you know, you could be bringing in around $60,000 a year! Read more below to find out how it works.</p>
                        <p><a href="#rewardsModal1" data-toggle="modal" class="secondary">See the numbers &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
        
          <div class="row referral-columns">
            <div class="col-md-12">
            <div class="col-sm-4  col-xs-12 text-center">
                <img src="/images/sm-rewards-icon1.jpg" class="img-responsive center-block rewards-icon">
                <div>
                    <h5 class="h4">Connect</h5>
                    <p>Get just 10 friends to sign up and you could earn almost $60k/year!</p>
                </div>
                <div class="col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                    <a class="btn btn-block btn-primary btn-lg btn-inverse rental-button" href="#registerModal1" data-toggle="modal">START SHARING</a>
                </div>
            </div>
            
            <div class="col-sm-4 col-xs-12 text-center">
               <img src="/images/sm-rewards-icon2.jpg" class="img-responsive center-block rewards-icon">
                <div>   
                   <h5 class="h4">Your Network</h5>
                   <p>3% back in credits for every dollar they spent. 3% back in cash for every dollar they earned.</p>
                </div>
               <div class="col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                   <a class="btn btn-block btn-secondary btn-lg btn-inverse rental-button" href="affiliates.php">SHOP NOW</a>
                </div>
            </div>
            
             <div class="col-sm-4 col-xs-12 text-center">
               <img src="/images/sm-rewards-icon3.jpg" class="img-responsive center-block rewards-icon">
               <div>
                   <h5 class="h4">Earn BIG!</h5>
                   <p>You could earn in the neighborhood of $300k/year by getting 50 referrals!</p>
                </div>
               <div class="col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                   <a class="btn btn-block btn-tertiary btn-lg btn-inverse rental-button" href="#rewardsModal1" data-toggle="modal">SEE HOW</a>
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
                    <div class="col-md-6 col-md-offset-6 col-xs-10 col-xs-offset-1 text-center white-box">
                        <h2 class="h1">Here's an example</h2>
                        <p class="blurb">You get your friends Kim and Tim signed up. Through WorkMeNow’s platform Kim earns $50 babysitting and Tim spends $20 on a ride downtown. You just earned $0.75 cash from Kim working and earned $0.30 in credit from Tim’s ride. This starts adding up quickly as your network multiplies!</p>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <a href="#rewardsModal1" data-toggle="modal" class="btn btn-lg btn-block btn-primary btn-inverse">HOW DOES THIS ADD UP?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="no-padd join">
    <div class="slide extra-padd">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="row">
                      <h2>Sign up and start growing your network!</h2><span class="hidden-sm hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="visible-sm-inline visible-xs-inline"><br /></span><a href="#registerModal1" data-toggle="modal" class="btn btn-lg btn-tertiary">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
    
</div>
<!--END canvas-->
<?php include("modal-register.php"); ?>
<?php include("modal-login.php"); ?>
<?php include("modal-rewards.php"); ?>


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
<script src="js/bootstrap/offcanvas.js"></script>
<!--<script src="js/bootstrap/scrollspy.js"></script>-->
<!--<script src="js/bootstrap/tab.js"></script>-->
<!--<script src="js/bootstrap/tooltip.js"></script>-->
<!--<script src="js/bootstrap/popover.js"></script>-->

</body>
</html>