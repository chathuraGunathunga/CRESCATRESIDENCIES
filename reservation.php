<?php require_once("_inc/session.php");?>
<?php require_once("_inc/functions.php");?>
<?php confirm_logged_in() ;?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRESCAT RESIDENCIES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="calanderthem/calanderstyle/fullcalendar.css" rel="stylesheet" >
    <link href="calanderthem/calanderstyle/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="calanderthem/calanderstyle/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="datepicker/css/jquery.datetimepicker.css"/>
    <script src="js/respond.js"></script>

   
</head>

    <body id="reservation">

       <?php include 'main-nav.php';?>
    <div class="container">

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


    <!-- row 2 -->
<div class="row reservation">
        
        <article class="col-lg-8">
            <div class = "calanderui">
            <h3 class="bookapdate">APERTMENT BOOKED <small class="col-lg-6 bookapdate">USER NAME : <?php echo $_SESSION["user_email"] ?></small></h3>
            <div id='loading'>loading...</div>

            <div id='calendar' class="col-lg-12"></div>
           </div>
        </article>
         <aside class="col-lg-4">
                <a href="logout.php"><button type="button" id="facilbook" name="book" class="btn btn-danger pull-right col-lg-3">Logout</button></a>
                 <?php include "bookingdetails.php"; ?>
 
    
                            
                        <?php if(isset($_SESSION["arrivale_date"])  && isset($_SESSION["departure_date"])){ ?>
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href= "#vacc" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-pushpin"></span>Booking details</a>
                                    </h4>
                                  </div>
                                <div id="vacc" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <form action="insert_book_processing.php" method="post">
                                <?php echo "<h4>Arrivale date :".$_SESSION["arrivale_date"]."</h4>"; ?>
                                <?php echo "<h4>Departure date :".$_SESSION["departure_date"]."</h4><br/>"; ?>
                                           <?php $arrivale_date = $_SESSION["arrivale_date"]; ?>
                                           <?php $departure_date = $_SESSION["departure_date"]; ?>
                                <input type="hidden" name="arrivale_date" value="<?php echo $arrivale_date; ?>" >
                                 <input type="hidden" name="departure_date" value="<?php echo $departure_date; ?>" >
                          <?php      
                                    $_SESSION["arrivale_date"] = null;
                                    $_SESSION["departure_date"] =null; 
                          ?>
                                  <input type="submit" name="submit" value="Confirm booking date" class="btn btn-warning btn-large  pull-right"/>
                                   <a href="reservation.php" ><button type="button" id="facilbook" name="book" class="btn btn-success   col-lg-3">Edit date</button></a>
                                  </form>
                        
                            </div>
                          </div>
                        </div>
                        <?php } elseif(isset($_SESSION["booking_errors"])){ ?>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href= "#vacc" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-pushpin"></span>Booking details</a>
                                    </h4>
                                  </div>
                                <div id="vacc" class="panel-collapse collapse in">
                              <div class="panel-body">

                                <?php $errors = errors(); ?>
                        
                                      <form action="book_processing.php" method="post">
                                       <?php if(isset($errors["arrivale_date"])) { ?>
                                       <label class = "errors"> <?php echo htmlentities($errors["arrivale_date"]);?></label>
                                      <?php  } else { ?>
                                      <label>Arrivale date :</label>
                                      <?php } ?>

                                       <input type="text" name="arrivale_date" class="col-lg-12 col-xs-12" id="datetimepicker1" placeholder="Date format : yyyy-m-d(ex:-2016-1-7)" >


                                      <?php if(isset($errors["departure_date"])) { ?>
                                      <label class = "errors"> <?php echo htmlentities($errors["departure_date"]);?></label>
                                      <?php  } else { ?>
                                      <label>Departure date:</label>
                                      <?php } ?>

                                     <input type="text" name="departure_date" class="col-lg-12 col-xs-12" id="datetimepicker2" placeholder="Date format : yyyy-m-d(ex:-2016-1-7)" ><br/>
                                     <br/>
                                     <input type="submit" name="submit" value="Book now" class="btn btn-warning btn-large"/>
                                     </form>
                          </div>
                          </div>
                        </div>
                        <?php } else { ?>
                        <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a href= "#vacc" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-pushpin"></span>Booking details</a>
                                    </h4>
                                </div>
                              <div id="vacc" class="panel-collapse collapse in">
                        <div class="panel-body">

                        <form action="book_processing.php" method="post">

                    
                        <label>Arrivale date :</label>
                      

                         <input type="text" name="arrivale_date" class="col-lg-12 col-xs-12" id="datetimepicker1" placeholder="Date format : yyyy-m-d(ex:-2016-1-7)" >


                
                        <label>Departure date:</label>
                   

                       <input type="text" name="departure_date" class="col-lg-12 col-xs-12" id="datetimepicker2" placeholder="Date format : yyyy-m-d(ex:-2016-1-7)" ><br/>
                       <br/>
                       <input type="submit" name="submit" value="Book now" class="btn btn-warning btn-large"/>
                       </form>

                        </div>
                      </div>
                  </div>
                         <?php } ?>

    </aside>

        
    </div>
     <footer class="row">
         <?php  include 'footer.php' ;?>
    </footer>
  
<script src="calanderthem/lib/moment.min.js"></script>
<script src="calanderthem/lib/jquery.min.js"></script>
<script src="calanderthem/calanderstyle/fullcalendar.min.js"></script>
<script src="calanderthem/calanderstyle/custom.js"></script>
<script src="datepicker/build/jquery.datetimepicker.full.js"></script>
<script src="datepicker/js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custome.js"></script>

</body>
</html>