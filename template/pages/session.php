<?php
   include('../proses/connection/koneksi.php');
   session_start();
   
   $user_check = $_SESSION['email'];
   
   $ses_sql = mysqli_query($mysqli,"select email,id_level,nama from user where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $email = $row['email'];
   $level = $row['id_level'];
   $nama = $row['nama'];
   
   if(!isset($_SESSION['email'])){
      header("location:login.php");
   }
?>