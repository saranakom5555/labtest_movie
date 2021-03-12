<?php
include('connect.php');

$query= "DELETE FROM movie WHERE id = '{$_GET['id']}'";
$result = mysqli_query($con, $query);
if($result){
    header("Location: showtable.php");
} else {
    echo "ไม่สามารถลบรายการภาพยนต์ได้" . mysqli_error($con);
}

?>