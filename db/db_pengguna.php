<?php
$proses=$_GET['proses'];
include "../koneksi.php";

if($proses=='insert'){
   $nama=$_POST['nama'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $level=$_POST['level'];

   mysqli_query()
}