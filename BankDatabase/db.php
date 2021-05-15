<?php
   $con=mysqli_connect("localhost", "root", "", "")
   or die("MySQL 접속 실패 !!");
   
   $sql="CREATE DATABASE mybank";
   $ret=mysqli_query($con,$sql);
   
   if($ret) {
      echo "mybank 생성 성공";
   }
   else {
      echo "mybank 생성 실패"."<br>";
      echo "실패 원인 :".mysqli_error($con);
   }
   
   mysqli_close($con);
?>
