<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $progdi=$_POST['progdi'];
 $q=mysqli_query($con,"UPDATE `dt_mhs` SET `nama`='$nama',`nim`='$nim',`progdi`='$progdi' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>