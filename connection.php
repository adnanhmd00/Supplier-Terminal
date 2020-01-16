<?php
    header("Access-Control-Allow-Origin: *"); ?>

<?php
$con = @mysqli_connect("localhost", "root", "") or die("Database Connection Fail");
$db = mysqli_select_db($con, "oregonix_ts") or die("Can't find Database");
?>
<?php
if(isset($_POST['cost'])){
    $cost  = $_POST['cost'];
    $id = $_POST['id'];

  $result =  mysqli_query($con, "UPDATE supplier_activity SET cost='$cost' WHERE id = '$id'");
  if($result){
      return 'Data Updated';
  }
}
?>
<?php
if(isset($_POST['price'])){
    $price  = $_POST['price'];
    $id = $_POST['id'];

  $result =  mysqli_query($con, "UPDATE supplier_flight SET price='$price' WHERE id = '$id'");
  if($result){
      return 'Data Updated';
  }
}
?>
<?php
if(isset($_POST['pkg_price'])){
    $pkg_price  = $_POST['pkg_price'];
    $id = $_POST['id'];

  $result =  mysqli_query($con, "UPDATE supplier_packages SET pkg_price='$pkg_price' WHERE id = '$id'");
  if($result){
      return 'Data Updated';
  }
}
?>
<?php
if(isset($_POST['total_price'])){
    $price_km  = $_POST['price_km'];
    $total_price  = $_POST['total_price'];
    $id = $_POST['id'];

  $result =  mysqli_query($con, "UPDATE supplier_cab SET price_km='$price_km', total_price='$total_price' WHERE id = '$id'");
  if($result){
      return 'Data Updated';
  }
}
?>

<?php
if(isset($_POST['room_name_1'])){
    $room_name_1  = $_POST['room_name_1'];
    $b2b_price_1  = $_POST['b2b_price_1'];
    $b2c_price_1  = $_POST['b2c_price_1'];

    $room_name_2  = $_POST['room_name_2'];
    $b2b_price_2  = $_POST['b2b_price_2'];
    $b2c_price_2  = $_POST['b2c_price_2'];

    $room_name_3  = $_POST['room_name_3'];
    $b2b_price_3  = $_POST['b2b_price_3'];
    $b2c_price_3  = $_POST['b2c_price_3'];

    $room_name_4  = $_POST['room_name_4'];
    $b2b_price_4  = $_POST['b2b_price_4'];
    $b2c_price_4  = $_POST['b2c_price_4'];

    $id = $_POST['id'];

  $result =  mysqli_query($con, "UPDATE supplier_hotel SET room_name_1='$room_name_1', b2b_price_1='$b2b_price_1', b2c_price_1='$b2c_price_1',
                                                           room_name_2='$room_name_2', b2b_price_2='$b2b_price_2', b2c_price_2='$b2c_price_2',
                                                           room_name_3='$room_name_3', b2b_price_3='$b2b_price_3', b2c_price_3='$b2c_price_3',
                                                           room_name_4='$room_name_4', b2b_price_4='$b2b_price_4', b2c_price_4='$b2c_price_4'
                                 WHERE id = '$id'");
  if($result){
      return 'Data Updated';
  }
}
?>
