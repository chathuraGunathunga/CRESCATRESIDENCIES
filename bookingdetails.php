<div class="panel panel-default">
     <div class="panel-heading">
      <h4 class="panel-title">
            <a href= "#vacc" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><span class="glyphicon glyphicon-pushpin"></span>Booking details</a>
     </h4>
   </div>
   <div id="vacc" class="panel-collapse collapse in">
    <div class="panel-body">
              NAME : <?php echo $_SESSION["user_name"] ?><br/>
              <br/>
              <?php if(isset( $_SESSION["arrivale_date_details"] ) && isset($_SESSION["departure_date_details"])) {;?>
              ARRIVAL DATE : <?php echo $_SESSION["arrivale_date_details"]; ?><br/>
              DEPATURE DATE : <?php echo $_SESSION["departure_date_details"]; ?><br/>
              <br/>
              <p>Thank you for choosing CRESCAT RESIDENCIES</p> 
              <?php } else if(isset( $_SESSION["admin_confirm_booking"] )){ ?>


                  <?php echo $_SESSION["admin_confirm_booking"]; ?><br/>
                   <?php echo $_SESSION["user_email"]; ?>
                  <p>Thank you for choosing CRESCAT RESIDENCIES</p>

              <?php }else { ?>
              ARRIVAL DATTE : Not book<br/>
              DEPATURE DATE : Not book<br/>
              <?php } ?>
       </div>
      </div>
    </div>