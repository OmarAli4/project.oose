<?php
include_once "header.php"
?>
 <!-- contact -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleee.css">
    <title>Document</title>
 </head>
 <body>
 </body>
 </html>
<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>login</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form" action="dologin.php" method="post">
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="text" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="password" type="password" name="password">                          
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">login</button>
                        </div>
                        <div class="col-md-12">
                        <button class="send_btn"><a class=nav-link href=registerview.php>register</a></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
<?php
include_once "footer.php"
?>