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

<body id="houserule">
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
    <div class="row apartinfohuse">
        <article class="col-lg-8 col-lg-offset-1 col-sm-7 col-sm-offset-1 col-lg-push-2 col-sm-push-4">
       
            <h4 class="maintopic">HOUSE RULES</h4>
             <p class="maintopicin">Maximum number of people allowed in apartment 5</p>
            <p>A list of Rules will be on the table when someone arrives </p>
            <h4 class="maintopic">1.ELECTRICITY CHARGES</h4>
            <p>Guest is responsible for Electricity charges during their stay in the apartment. An electricity meter reading will be done at the start and end of the stay, so that Guest will know exactly how much was consumed. The electricity charge per unit is LKR 35.00. This is how much we are billed per unit and we do not make any money off </p>
            <h4 class="maintopic">2.INTERNET USE <small class="maintopic">(website hidden)</small></h4>
            <p>Guest is allowed 1GB of Internet usage per day</p>
            <h4 class="maintopic">3.GUEST ACCESS</h4>
            <p>Guests have access to the Crescat Gym, the pool (Ansana), own parking space and of course Lobby, Coffee Shop and all facilities of the Cinnamon Grand Hotel</p>
            <h4 class="maintopic">4.INTERACTION WITH GUESTS</h4>
            <p>Guests have access to the Crescat Gym, the pool (Ansana), own parking space and of course Lobby, Coffee Shop and all facilities of the Cinnamon Grand Hotel</p>
            <h4 class="maintopic">5.OTHER THINGS TO NOTE</h4>
            <p class="maintopicin">We observe a strict NO SMOKING rule in the apartment</p>
            <div class ="col-lg-3 pull-right">
            <a <?php if ( logged_in() ) { ?>href="reservation.php"<?php }else{?>href="#newid" data-toggle="modal" <?php } ?>><button type="button" id="facilbook" name="book" class="btn btn-success   btn-block col-lg-12"><?php if ( logged_in() ) { ?>Book Now <?php }else{?>Logged in to book <?php } ?> </button></a><br/>
            </div>
         </article>
         <aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
            <p class = "artileStyl"><img src="img/family.jpg" class=" img-responsive img-thumbnail pull-right">
            <h5 class="maintopic">The Neighborhood</h5>
            <p>It is close to the Beach, Galle Face Green, the UK and US embassies, the Colombo Swimming Club,Fort area (for shopping), the Dutch Hospital restaurants and entertainment complex and the International Food Court and Mall located in the basement</p>
            <h5 class="maintopic">Getting Around</h5>
             <p>Yes, the local Bus is right there on Galle Road and of course Taxis and tuk-tuks are available always at the Cinnamon Grand Hotel.</p>
           </aside> 

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
