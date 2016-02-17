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

<body id="home">
<!-- Main navigation-->
<?php include 'main-nav.php';?>

<div class="container">
    <!-- row 1 -->

<header class="row">
<!-- Carousel-->
<?php  include 'carousel.php' ;?>

</header>
    
    <!-- row 2 -->
<div class="row calanderui">
        
    	<article class="col-lg-8 col-lg-offset-1 col-sm-7 col-sm-offset-1 col-lg-push-2 col-sm-push-4">
       
            <h1 class="maintopic">CRESCAT RESIDENCIES</h1>
            <p class = "artileStyl"><img src="img/frontimgl.jpg" class="pull-right">Crescat Residencies offers the modern luxurious, fully furnished apartments in the most sought after location in Colombo, and perfect for the independent traveler. Being centrally located it is close to 90% of Colombo’s bars, pubs, restaurants and night life</p>
            <h4 class="maintopic">CRESCAT RESIDENCIES 8TH FLOOR APARTMENT FOR RENT</h4>
             <p class="maintopicin">Maximum number of people allowed in apartment 5</p>
            <p>A fully furnished apartment on 8th floor, Crescat Residencies with an excellent view of the swimming pool and the sea. Master bed room with attached bathroom, additional bedroom and bathroom, maid room and maids’ bathroom. Two balconies facing Angsana swimming pool. The building is equipped with its own gym and guests have access to the Angsana swimming pool.  75 Galle Rd, Colombo 00300, Sri Lanka</p>
            <h5 class="maintopic">The Neighborhood</h5>
            <p>It is close to the Beach, Galle Face Green, the UK and US embassies, the Colombo Swimming Club,Fort area (for shopping), the Dutch Hospital restaurants and entertainment complex and the International Food Court and Mall located in the basement</p>
            <h5 class="maintopic">Getting Around</h5>
             <p>Yes, the local Bus is right there on Galle Road and of course Taxis and tuk-tuks are available always at the Cinnamon Grand Hotel.</p>
        </article>
         <aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
            <div class="panel-group" id="accordion">
      
    <div class="panel panel-default">
     <div class="panel-heading">
      <h4 class="panel-title">
            <a href= "#vacc" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-pushpin"></span>Login</a>
     </h4>
   </div>
   <div id="vacc" class="panel-collapse collapse in">
    <div class="panel-body">
        <from>
        <label>Your email</label>
        <input type="text" name="name" class="col-lg-12" placeholder="user name" >
         <label>Your password</label>
        <input type="text" name="name" class="col-lg-12" placeholder="password" >
        <p><button type="submit" class="btn btn-warning btn-large">Submit</button></p>
        </form>
       </div>
      </div>
    </div>



    
    <div class="panel panel-default">
     <div class="panel-heading">
      <h4 class="panel-title">
        <a href= "#checkups" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-ok">
       </span>Registration</a>
     </h4>
     </div>
    <div id="checkups" class="panel-collapse collapse">
    <div class="panel-body">
       <from>
        <label>Your name</label>
        <input type="text" name="name" class="col-lg-12" placeholder="First and last, please!" >
         <label>Your email</label>
        <input type="text" name="name" class="col-lg-12" placeholder="ex: email@gmail.com" >
          <label>Set password</label>
        <input type="text" name="name" class="col-lg-12" placeholder="password" >
          <label>re-enterpassword</label>
        <input type="text" name="name" class="col-lg-12" placeholder="re-enterpassword" >
        <label class="checkbox"><input name="subcribe" type="checkbox" value="subscribe" data-toggle="collapse" data-target="#email">Subscribe me to the newsletter</label>
        <p><button type="submit" class="btn btn-warning btn-large">Submit</button></p>
        </form>
          </div>
      </div>
    </div>

    <a href="reservation.php"><button type="button" id="facilbook" name="book" class="btn btn-success   btn-block col-lg-12">Book Now</button></a>
         </aside>

        
    </div>
    
    
    
    <!-- row 4 -->
    <footer class="row">
      <?php  include 'footer.php' ;?>
    </footer>

</div> <!-- end container -->

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custome.js"></script>

</body>
</html>
