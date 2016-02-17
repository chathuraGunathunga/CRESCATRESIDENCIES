
   <form action="Register_processing.php" method="post">

            
              <label>Your name</label>
              <input type="text" name="name" value="" placeholder="First and last, please!" class="col-lg-12" />


              <label>Your email</label>
              <input type="text" name="email" value=""  placeholder="ex: email@gmail.com" class="col-lg-12"/>

              <label>Set password</label>
              <input type="password" name="setpassword" value=""  placeholder="password" class="col-lg-12"/>
         
    
              <label>re-enterpassword</label>
              <input type="password" name="re-enterpassword" value=""  placeholder="re-enterpassword" class="col-lg-12" />


              <label>Subscribe me to the newsletter</label><br/>
                <input type="radio" name="subcribe" value="0"/> No
                &nbsp;
                <input type="radio" name="subcribe" value="1" />Yes<br/>
                <br/>

                <input type="submit" name="submit" value="Register" class="btn btn-warning btn-large"/>
            </form>