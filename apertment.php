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

<body id="apertment">
                    <?php include 'main-nav.php';?>
<div class="container">
    
    <!-- row 1 -->
    <header class="row">
    
    </header>
    
    <!-- row 3 -->
    <div class="row apartinfo">
        <article class="col-lg-8 col-lg-offset-1 col-sm-7 col-sm-offset-1 col-lg-push-2 col-sm-push-4">
       
            <h4 class="maintopic">CRESCAT RESIDENCIES 8TH FLOOR APARTMENT FOR RENT</h4>
             <p class="maintopicin">Maximum number of people allowed in apartment 5</p>
            <p class = "artileStyl">This is a luxury 2-bedroom apt with 2 bathrooms, living room, kitchen and small store room/laundry room. It is centrally air-conditioned, with running hot water, a parking space for 1 car and access to the <a href="http://www.cinnamonhotels.com/cinnamongrandcolombo/">Cinnamon Grand Hotel</a> swimming pool and gym. This apt tower adjoins the Cinnamon Grand with a Supermarket, Shopping complex and Food Court in the basement. It is a 5 minute walk to Galle Face Green and close to central Colombo, the Fort area and many restaurants with access to Nightlife and a 2 minute walk to the American and British Embassies, etc..</p>
           
        </article>
         <aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
            <h1 class="maintopic">CRESCAT RESIDENCIES <small class="maintopic">APARTMENT</small></h1>
           </aside> 

    </div>
    <div class="row apback">
           <div class="col-md-3 col-xs-6 clearfix ">
            <h4>Rooms</h4>
            <p><img src="img/apetroom.jpg" alt="" class="img-responsive img-thumbnail"></p>
            
            </div>
            <div class="col-md-3 col-xs-6 clearfix apartmentr">
        <ul>  
            <li><h5><span class="glyphicon glyphicon-star">Air Conditioning</h5></li>
            <li><h5><span class="glyphicon glyphicon-star"></span> LCD 32” Cable TV</h5></li>
            <li><h5><span class="glyphicon glyphicon-star"></span> DVD-CD player</h5></li>                          
            <li><h5><span class="glyphicon glyphicon-star"></span> Wifi</h5></li>
             <li><h5><span class="glyphicon glyphicon-star"></span> Iron with an ironing board</h5></li>
            <li><h5><span class="glyphicon glyphicon-star"></span> 5-star quality beds</h5></li>
        </ul>
            </div>
            <div class="col-md-3 col-xs-6 clearfix aprtmentki">
            <h4>Kitchenette </h4>
            <p><img src="img/kitcheniii.jpg" alt="" class="img-responsive img-thumbnail"></p>
            
            </div>
            <div class="col-md-3 col-xs-6 clearfix apartmentli">
             <ul>  
            <li><h5><span class="glyphicon glyphicon-star"> Complete Kitchenette</h5></li>
            </ul>
            </div>
    </div>
      <div class="row superMarket">
           <div class="col-md-3 col-xs-6 clearfix apartmet">
            <h4>Bathroom</h4>
            <p><img src="img/bathroom.jpg" alt="" class="img-responsive img-thumbnail"></p>
            
            </div>
            <div class="col-md-3 col-xs-6 clearfix apartmetnew">
              <ul>  
                <li><h5><span class="glyphicon glyphicon-star">Bathroom shower cubicle</h5></li>
                <li><h5><span class="glyphicon glyphicon-star"></span> Sauna</h5></li>
                <li><h5><span class="glyphicon glyphicon-star"></span> Washing Machine</h5></li>  
                <li><h5><span class="glyphicon glyphicon-star"></span> Hotwater</h5></li>                          
            </ul>
            </div>
            <div class="col-md-3 col-xs-6 clearfix apartmetinfo">
            <h4>Security</h4>
            <p><img src="img/cctv.jpg" alt="" class="img-responsive img-thumbnail"></p>
            
            </div>
            <div class="col-md-3 col-xs-6 clearfix apartseu">
              <ul>  
                <li><h5><span class="glyphicon glyphicon-star">24Hr CCTV monitoring</h5></li>
                <li><h5><span class="glyphicon glyphicon-star"></span> Built in closets</h5></li>                        
            </ul></br>
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
