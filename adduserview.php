<?php
include_once "header.php"
?>
<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>ADD USER</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form" action="addusercontrol.php" method="post">
                     <div class="row">
                     <div class="col-md-12">
                           <input class="contactus" placeholder="fristname" type="text" name="fristname"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="lastname" type="text" name="lastname"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="gender" type="text" name="gender"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="address" type="text" name="address"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="birthdate" type="DATE" name="birthdate"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="phonenum" type="text" name="phonenum"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="text" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="password" type="password" name="password">                          
                        </div>
                        <div class="col-md-12">
                        <select name="usertype[]" placeholder="usertype" multiple>
                           <option value="" disabled selected>choose user type</option>
                           <option value="500">admin</option>
                           <option value="800">Receptionist</option>
                           <option value="900">pataint</option>
                        </select>                       
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">ADD NOW</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
<?php
include_once "footer.php"
?>