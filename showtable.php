<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</head>
<?php
include('connect.php');
$sql = "SELECT * FROM movie";
$result = $con->query($sql);

if(isset ($_GET['search'])){
    $sql = "SELECT * FROM movie WHERE name LIKE '%{$_GET['search']}%'";
}
$result = $con->query($sql);

?>
<body>
    <form action="" method="GET">
    <div class="mb-3">
      <label for="text" class="form-label">ค้นหารายการภาพยนต์</label>
      <input type="text" id="search"  name="search"> 
      <button type="submit" class="btn btn-info">ค้นหา</button>
    </div>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">รหัสภาพยนต์</th>
            <th scope="col">ชื่อภาพยนต์</th>
            <th scope="col">วันที่/เวลา</th>
            <th scope="col">ชื่อผู้ใช้งาน</th>
            <th scope="col">PIN</th>
            <th scope="col">รายการแก้ไข</th>
          </tr>
        </thead>
        <tbody>
<?php
    while($row = mysqli_fetch_array($result)) {
?>
          <tr>
            <th scope="row"><?php echo $row['id'];?></th>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['date'];?></td>
            <td><?php echo $row['customer'];?></td>
            <td><?php echo $row['pin'];?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="updateform.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-warning">แก้ไข</button></a>
                    <a href="delete.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-danger">ลบ</button></a>
                </div>
            </td>
            </tr>
<?php
    }
?>
            </tbody>
            </table>
      <a href="insertform.html"><button type="button" class="btn btn-success">เพิ่มรายการภาพยนต์</button></a>
</body>
</html>