            <?php $errors = errors(); ?>
            <?php $postarr = getpost();?>
   <form action="Register_processing.php" method="post">

             <?php if(isset($errors["name"])) { ?>
              <label class = "errors"> <?php echo htmlentities($errors["name"]);?></label>
              <?php  } else { ?>
              <label>Your name</label>
              <?php } ?>

              <input type="text" name="name" value="<?php echo htmlentities($postarr["name"])?>" placeholder="First and last, please!" class="col-lg-12" />


              <?php if(isset($errors["email"])) { ?>
              <label class = "errors"> <?php echo htmlentities($errors["email"]);?></label>
              <?php  } else { ?>
              <label>Your email</label>
              <?php } ?>
              <input type="text" name="email" value="<?php echo htmlentities($postarr["email"])?>"  placeholder="ex: email@gmail.com" class="col-lg-12"/>

              <?php if(isset($errors["setpassword"])) { ?>
              <label class = "errors"><?php echo htmlentities($errors["setpassword"]);?></label>
              <?php  } else { ?>
              <label>Set password</label>
              <?php } ?>
              <input type="password" name="setpassword" value=""  placeholder="password" class="col-lg-12"/>


              <?php if(isset($errors["re-enterpassword"])) { ?>
              <label class = "errors"><?php echo htmlentities($errors["re-enterpassword"]);?></label>
              <?php  } else { ?>
              <label>re-enterpassword</label>
              <?php } ?>
               
                <input type="password" name="re-enterpassword" value=""  placeholder="re-enterpassword" class="col-lg-12" />

                


              <?php if(isset($errors["subcribe"])) { ?>
              <label class = "errors"><?php echo htmlentities($errors["subcribe"])." ! Please select Yes or No"; ?></label><br/>
              <?php  } else { ?>
              <label>Subscribe me to the newsletter</label>
              <?php } ?>

                <input type="radio" name="subcribe" value="0"/> No
                &nbsp;
                <input type="radio" name="subcribe" value="1" />Yes<br/>
                <br/>

                <input type="submit" name="submit" value="Register" class="btn btn-warning btn-large"/>
            </form>