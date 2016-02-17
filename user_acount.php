<div class="panel panel-default">
     <div class="panel-heading">
      <h4 class="panel-title">
            <a href= "#vacc" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-pushpin"></span>User details</a>
     </h4>
   </div>
   <div id="vacc" class="panel-collapse collapse in">
    <div class="panel-body">
              USER NAME : <?php echo $_SESSION["user_email"] ?><br/>
              <br/>
               <a <?php if ( logged_in() ) { ?>href="reservation.php"<?php }else{?>href="#newid" data-toggle="modal" <?php } ?>><button type="button" id="facilbook" name="book" class="btn btn-success   btn-block col-lg-12"><?php if ( logged_in() ) { ?>Book Now <?php }else{?>Logged in to book <?php } ?> </button></a><br/>
              <a href="logout.php"><button type="button" id="facilbook" name="book" class="btn btn-danger   btn-block col-lg-12">Logout</button></a><br/>  
       </div>
      </div>
    </div>