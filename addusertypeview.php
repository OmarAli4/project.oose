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
                  <form id="request" class="main_form" action="addusertypecontrol.php" method="post">
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="usertype" type="text" name="usertype"> 
                        </div>
                        <div class="col-md-12">
                        <select name="menutype[]" placeholder="usertype" multiple>
                           <option value="" disabled selected>choose user type</option>
                           <option value="supermenu.php">supermenu</option>
                           <option value="highmenu.php">highmenu</option>
                           <option value="medmenu.php">medmenu</option>
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