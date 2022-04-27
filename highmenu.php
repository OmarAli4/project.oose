<?php
include_once "header.php"
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Slick Tables</title>
  <link rel="stylesheet" href="css/stylee.css">
</head>
<body>
<div class="titlepage">
<h1>WELCOME <?php echo  $_SESSION["Email"]?></h1>
</div>
<!-- partial:index.partial.html -->

<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>خيارات</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form">
                        <div class="col-md-12">
                        <button class="send_btn"><a class=nav-link href=listproduct.php>عرض المنتجات</a></button>
                        <button class="send_btn"><a class=nav-link href=modifyuserscontrol.php>تعديل بياناتي</a></button>
                        <button class="send_btn"><a class=nav-link href=modusertypecontrol.php>حجز كشف</a></button>
                        <button class="send_btn"><a class=nav-link href=modusertypecontrol.php>تفاصيل كشفي</a></button>
                        <button class="send_btn"><a class=nav-link href=modusertypecontrol.php>تعديل كشفي</a></button>
                        <button class="send_btn"><a class=nav-link href=modusertypecontrol.php>حذف كشفي</a></button>
                        </div>
                        </div>
                     </div>
                  </form>
              
               </div>
            </div>
        </div>
   </div>
<!-- <table>
  <thead>
    <tr>
      <th>option one
      <th>option two
      <th>option three
  </thead>
  <tbody>
    <tr>
      <td><a href=listproduct.php /a>view product
      <td><a href=modifyusers.php /a> modifyusers
      <td><a href=modifyusertype.php /a> modifyuserstype
  </tbody>
</table> -->

<!-- <table>
  <thead>
    <tr>
        <th>الأختيار السادس
        <th>الأختيار الخامس
        <th>الأختيار الرابع
        <th>الأختيار الثالث
        <th>الأختيار الثاني
        <th>الأختيار الأول
  </thead>
  <tbody>
    <tr>
      <td><a href=listproduct.php /a>عرض الأدويه
      <td><a href=edithimself.php /a> تعديل معلوماتي
      <td><a href=order.php /a> حجز كشف
      <td><a href=orderdetails.php /a> عرض تفاصيل كشفي
      <td><a href=editorder.php /a> تعديل كشفي
      <td><a href=deleteorder.php /a> حذف كشفي
  </tbody>
</table> -->


<!-- <table>
  <thead>
    <tr>
        <th>الأختيار السادس
        <th>الأختيار الخامس
        <th>الأختيار الرابع
        <th>الأختيار الثالث
        <th>الأختيار الثاني
        <th>الأختيار الأول
  </thead>
  <tbody>
    <tr>
      <td><a href=listproduct.php /a>عرض الأدويه
      <td><a href=viewpataint.php /a> تعديل جميع المرضى
      <td><a href=editpataint.php /a> تعديل ملف المرضى
      <td><a href=addorder.php /a> حجز كشف   
      <td><a href=editorder.php /a> تعديل كشف
      <td><a href=deleteorder.php /a> حذف كشف
  </tbody>
</table> -->

<!-- partial -->
  
</body>
</html>
<?php
include_once "footer.php"
?>