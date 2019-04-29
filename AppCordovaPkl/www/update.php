<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_m=$_POST['id_m'];
 $merk=$_POST['merk'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];

 
 $q=mysqli_query($con,"UPDATE `tbl_masuk` SET `id_m`='$id_m',`merk`='$merk',`jumlah`='$jumlah',`harga`='$harga' where `id_m`='$id_m'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>