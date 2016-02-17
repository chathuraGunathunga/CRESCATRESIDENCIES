  			<?php $login_errors = get_log_errors(); ?>
            <?php $login_postarr = get_log_post();?>
  <form action="login_processing.php" method="post">


              		<?php if(isset($login_errors["username"])) { ?>
              		<label class = "errors"> <?php echo htmlentities($login_errors["username"]);?></label>
              		<?php  } else { ?>
                    <label>Username:</label>
                    <?php } ?>
                    <input type="text" name="username" value="<?php echo htmlentities($login_postarr["username"])?>"  placeholder="username" class="col-lg-12"/><br/>


                    <?php if(isset($login_errors["password"])) { ?>
                    <label class = "errors"> <?php echo htmlentities($login_errors["password"]);?></label>
                    <?php  } else { ?>
                    <label>password</label>
                     <?php } ?>
                    <input type="password" name="password" value=""   placeholder="password" class="col-lg-12"/><br/>
                    <br/>
                    <input type="submit" name="submit" value="Login"  class="btn btn-warning btn-large" />
       </form>
