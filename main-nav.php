<?php require_once("_inc/session.php");?>
<?php require_once("_inc/functions.php");?>
<!-- Bootstrap -->
<div class="row">
        <nav class="navbar navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="glyphicon glyphicon-arrow-down"></span>
                  MENU
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav nav-justified">
                    <li class ="pic"><a href="index.php">HOME</a></li>
                    <li class ="pic"><a href="apertment.php">APARTMENT</a></li>
                    <li class ="pic"><a href="facilities.php">FACILITIES</a></li>
                    <li class ="pic"><a href="houserule.php">HOUSE RULES</a></li>
                    <?php if ( logged_in() ) { ?>
                    <li class ="pic"><a href="reservation.php">RESERVATION</a></li>
                    <?php } ?>
                    <li class ="pic"><a href="contact.php">CONTACT</a></li>  
                </ul>
            </div>
         </nav> 
    </div>

<!-- javascript -->
   <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custome.js"></script>


    