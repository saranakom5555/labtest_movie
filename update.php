<?php
include('connect.php');
$sql = "UPDATE movie SET
name = '{$_POST['name']}', date = '{$_POST['date']}'
WHERE id = '{$_POST['id']}'";
if($con->query($sql) == TRUE){
    header("Location: showtable.php");
} else {
    echo "ไม่สามารถแก้ไขรายการภาพยนต์ได้" . $sql . "<br>" . $con->error;
}
$con->close();

?>