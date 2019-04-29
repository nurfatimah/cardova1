<?php
 include "db.php";
 if(isset($_GET['id_m']))
 {
 $id_m=$_GET['id_m'];
 $q=mysqli_query($con,"delete from `tbl_masuk` where `id_m`='$id_m'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>