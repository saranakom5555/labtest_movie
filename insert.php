<?php
include('connect.php');

$query= "INSERT INTO movie (id,name,date,customer,pin)
VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['date']}', '{$_POST['customer']}', '{$_POST['pin']}')";
$result=mysqli_query($con, $query);
if ($result == TRUE) {
    header("Location: showtable.php");
} else {
    echo "ไม่สามารถเพิ่มรายการภาพยนต์ได้" ;
}

?>