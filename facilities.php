<?php require_once("_inc/session.php");?>
<?php require_once("_inc/functions.php");?>
<?php require_once("_inc/validation_functions.php");?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRESCAT RESIDENCIES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
</head>

<body id="facilities">
                    <?php include 'main-nav.php';?>
<div class="container">
    
    <!-- row 1 -->
    <header class="row">
    
    </header>
       <div class="row apartinfo">
        <article class="col-lg-8 col-lg-offset-1 col-sm-7 col-sm-offset-1 col-lg-push-2 col-sm-push-4">
       
            <h4 class="maintopic">CRESCAT RESIDENCIES 8TH FLOOR APARTMENT</h4>
            <p class="maintopicin">Maximum number of people allowed in apartment 5</p>
            <p class = "artileStyl">Crescat Residencies offers the modern luxurious, fully furnished apartments in the most sought after location in Colombo, and perfect for the independent traveler. Being centrally located it is close to 90% of Colombo’s bars, pubs, restaurants and night life. </p>
           
        </article>
         <aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
            <h1 class="maintopic">CRESCAT RESIDENCIES <small class="maintopic">APARTMENT</small></h1>
           </aside> 

    </div>
    
    <!-- row 3 -->
    <div class="row faciback">

        <div class="col-md-3 col-xs-6 clearfix facilities">
            <p><img src="img/ser_pic8.jpg" alt="" class="img-responsive img-thumbnail"></p>
            <h4>Cuisine and Restaurants </h4>
              <p> Crescat is in the same premises as the <a href="http://www.cinnamonhotels.com/cinnamongrandcolombo/">Cinnamon Grand,a 5 star hotel in Colombo </a> and has access to any sort of cuisine to cater all palates and tastes, whether it is Sri Lankan, Indian, Italian, Asian Fusion. The apartment also has access to the food court at Crescat Boulevard Shopping Mall, which is just a 5 minute walk away.</p>
        </div>
        
        <div class="col-md-3 col-xs-6 clearfix facilitiesPool">
            <p><img src="img/ser_pic2.jpg" alt="" class="img-responsive img-thumbnail"></p>
            <h4>Pool</h4>
            <p>Crescat has swimming pools within its premises; each well-kept and maintained for that dip you would like to have in comfort and privacy. </p>
        </div>
        <div class="col-md-3 col-xs-6 clearfix facilitiesfitnessgym">
            <p><img src="img/gym.jpg" alt="" class="img-responsiv img-thumbnail"></p>
            <h4>Fitness Gym </h4>
            <p>A well-equipped gym within the same premises allows the guests work on their fitness.</p>
        </div>
       
        <div class="col-md-3 col-xs-6 clearfix facilitiesSpa">
            <p><img src="img/Spa.jpg" alt="" class="img-responsive img-thumbnail"></p>
            <h4>Spa</h4>
            <p>Crescat has access to Angsana Spa, which one of the best spas in Colombo and is a part of an international chain. All the masseuses are internationally trained with lots of experience in many techniques of therapy such as Thai, Balinese and Reflexology. </p>
         </div>

        
    </div>
    <div class="row superMarket">
           <div class="col-md-3 col-xs-6 clearfix superMarketinfo">
            <h4>Super Market</h4>
            <p><img src="img/super-market.jpg" alt="" class="img-responsive img-thumbnail"></p>
            
            </div>
            <div class="col-md-3 col-xs-6 clearfix superMarketinfonew">
              <p> Situated at the basement level of Crescat Shopping mall, this supermarket is a part of a local chain and one of the best in the country. Well stocked with many local and foreign branded items of food and beverages, as well as many other household goods.</p>
            </div>
            <div class="col-md-3 col-xs-6 clearfix familyinfo">
            <h4>An ideal option </h4>
            <p><img src="img/family.jpg" alt="" class="img-responsive img-thumbnail"></p>
            
            </div>
            <div class="col-md-3 col-xs-6 clearfix familyinfonew">
              <p>An ideal option for a Group / Family of 4-5 who wants privacy with 5 star amenities (Maximum number of people allowed in apartment 5)</p>
              <a <?php if ( logged_in() ) { ?>href="reservation.php"<?php }else{?>href="#newid" data-toggle="modal" <?php } ?>><button type="button" id="facilbook" name="book" class="btn btn-success   btn-block col-lg-12"><?php if ( logged_in() ) { ?>Book Now <?php }else{?>Logged in to book <?php } ?> </button></a>
            </div>
    </div>
    
    <!-- row 4 -->
    <footer class="row">
         <?php  include 'footer.php' ;?>
    </footer>

</div> <!-- end container -->



 <div class="modal fade" id="newid" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CRESCAT RESIDENCIES</h4>
        </div>
        <div class="modal-body">
          <div class="row" >
          <article class="col-lg-6 col-sm-6 ">
             <?php include "login_first.php"; ?>
          </article>
          <aside class="col-lg-6  col-sm-6 moas">
              <?php include "Registrationform_first.php"; ?>
          </aside>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pic" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custome.js"></script>
</body>
</html>
