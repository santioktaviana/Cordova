<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $progdi=$_POST['progdi'];
 $q=mysqli_query($con,"INSERT INTO `dt_mhs` (`nama`,`nim`,`progdi`) VALUES ('$nama','$nim','$progdi')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>