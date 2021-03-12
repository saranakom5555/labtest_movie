<?php
$con= mysqli_connect("localhost","root","","movie") or die ("Error: " . mysqli_error($con));
mysqli_query($con, "set names'utf8' ");

?>