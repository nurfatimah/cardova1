<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id_m=$_POST['id_m'];
 $merk=$_POST['merk'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];
 
 
 $q=mysqli_query($con,"INSERT INTO `tbl_masuk` (`id_m`,`merk`,`jumlah`,`harga`) VALUES ('$id_m','$merk','$jumlah','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>