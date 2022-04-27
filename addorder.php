
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Multiple Select Dropdown in PHP</title>
  <style>
    .container {
      max-width: 350px;
      
      text-align: center;
    }
    select {
      width: 100%;
      min-height: 100px;
      margin-bottom: 20px;
    }
    input[type="submit"] {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form action="" method="post" class="mb-3">
        <select name="specialty[]" multiple>
          <option value="" disabled selected>اختر نوع التخصص</option>
          <option value="باطنه">باطنه</option>
          <option value="مخ و اعصاب">مخ و اعصاب</option>
          <option value="عظام">عظام</option>
          <option value="اسنان">اسنان</option>
          <option value="قلب">قلب</option>
          <option value="عيون">عيون</option>
          <option value="اطفال">اطفال</option>
          <option value="نساء و توليد">نساء و توليد</option>
        </select>
        <select name="ordertype[]" multiple>
          <option value="" disabled selected>حدد نوع الطلب</option>
          <option value="كشف">كشف</option>
          <option value="استشاره">استشاره</option>
        </select>
         التاريخ<br> <input type="date" name="date">
          <br>
         الوقت<br> <input type="time" name="time2">
          <br><br>
        <input type="submit" name="submit" vlaue="Choose options">
    </form>
    <?php
      include_once"order.php";
      if(isset($_POST['submit']))
      {
        if(!empty($_POST['specialty'])&&!empty($_POST['ordertype'])&&!empty($_POST['date'])&&!empty($_POST['time2'])) 
        {
          foreach($_POST['specialty'] as $selected){
            $doctortype= $selected;
          }
          foreach($_POST['ordertype'] as $selected){
            $ordert= $selected;
          }
          $objorder=new order();
          $objorder->setpatientid($_GET["id"]);
          $objorder->setdoctorid($doctortype);
          $objorder->setordertype($ordert);
          $objorder->stororder();
          $orderdetils=new orderdetils();
          $orderdetils->setorderid( $objorder->getid());
          $orderdetils->setpatientid($_GET["id"]);
          $orderdetils->setordertypename($ordert);
          $orderdetils->setdate($_REQUEST["date"]);
          $orderdetils->settime($_REQUEST["time2"]);
          $orderdetils->stororderdetils();
          header("location:ordercontrol.php");
                
        } else 
          {
            echo 'من فضلك اعد ادخال البينات بشكل صحيح';
          }
      }
    ?>
  </div>
</body>
</html>