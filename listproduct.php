<?php
include_once "header.php";
?>
<?php
include_once "productcontroll.php";
//$obj= $array[0]->name;
//cho '<pre>';print_r($array[2]);echo'<pre>';
?>
      <!-- products -->
      <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">
                        <?php
                        for($i=0;$i<count($array);$i++)
                        {
                        ?>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="<?php echo $array[$i]->image;?>" alt="#"/></figure>
                              <h3><?php echo $array[$i]->name;?></h3>
                           </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-12">
                           <a class="read_more" href="#">up</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->
<?php
include_once "footer.php"
?>