  			<?php $log_fail = get_log_fail(); ?>
         <?php //$login_postarr = get_log_post();?>
  <form action="login_processing.php" method="post">
        
          <?php if(isset($log_fail)) { ?>
          <label class = "errors"> <?php echo htmlentities($log_fail);?></label><br/>
          <?php }; ?>
          <label>Username:</label>
          <input type="text" name="username" value=""  placeholder="username" class="col-lg-12"/><br/>


         <label>password</label>
         <input type="password" name="password" value=""   placeholder="password" class="col-lg-12"/><br/>
          <br/>
          <input type="submit" name="submit" value="Login"  class="btn btn-warning btn-large" />

       </form>