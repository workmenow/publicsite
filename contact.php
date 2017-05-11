<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WorkMeNow | Contact us</title>
    
    <!-- Load Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Core CSS -->
    <link href="css/app.css" rel="stylesheet">

</head>

<body id="contact">
   
<div class="canvas">
     
<?php include("nav.php"); ?>

<section class="extra-padd">
    <div class="container">
        <div class="col-xs-10 col-xs-offset-1 contact">
            <h1>Contact us</h1>
            <p class="blurb">Contact us by email, phone or by filling out the form below.</p>
            <div class="row"> 
                <div class="col-sm-6 col-sm-push-6 form-container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        <h2 class="form-heading">Send a message</h2>
                        <p>Write a brief question or comment below and someone from our team will reach out to you.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First name*" id="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 form-column">    
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last name*" id="lname" required>
                                        </div>
                                    </div>
                                </div>    
                                <div class="row">    
                                    <div class="col-lg-12 text-center">
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your message*" id="message"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your email address*" id="email">
                                        </div>
                                        
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-block btn-lg btn-primary">SUBMIT</button>
                                    </div>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div><!--END form-container -->
                <div class="col-sm-6 col-sm-pull-6 contact-info">
                    <h5>Sales</h5>
                    <p>sales@workme.works</p>
                    <p>(214) 123-5678</p>
                    
                    <h5>Sales</h5>
                    <p>sales@workme.works</p>
                    <p>(214) 123-5678</p>
                    
                    <h5>Sales</h5>
                    <p>sales@workme.works</p>
                    <p>(214) 123-5678</p>
                    
                    <h5>Sales</h5>
                    <p>sales@workme.works</p>
                    <p>(214) 123-5678</p>
                    
                    <h5>Sales</h5>
                    <p>sales@workme.works</p>
                    <p>(214) 123-5678</p>
                </div>
            </div>
        </div><!--END contact-->
    </div> <!--END container-->
</section>


<?php include("footer.php"); ?>
    
</div>
<!--END canvas-->
<?php include("modal-register.php"); ?>
<?php include("modal-login.php"); ?>

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