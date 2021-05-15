<?php
   $con=mysqli_connect("localhost", "root", "", "mybank")
   or die("MySQL 접속 실패 !!");
   
   $sql="
      CREATE TABLE users
      ( ID VARCHAR (20) NOT NULL PRIMARY KEY,
        PW VARCHAR (512) NOT NULL,
		SALT VARCHAR(20) NOT NULL,
		NAME TEXT(20) NOT NULL,
		PH VARCHAR(512) NOT NULL,
		CITY TEXT(512) NOT NULL,
		GU TEXT(512) NOT NULL,
		DONG TEXT(512) NOT NULL,
		BF0 VARCHAR(20) NOT NULL,
		BF1 VARCHAR(20) NOT NULL,
		BF2 VARCHAR(20) NOT NULL,
		BF3 VARCHAR(20) NOT NULL,
		BF4 VARCHAR(20) NOT NULL,
		BF5 VARCHAR(20) NOT NULL,
		BF6 VARCHAR(20) NOT NULL,
		BF7 VARCHAR(20) NOT NULL,
		BF8 VARCHAR(20) NOT NULL,
		BF9 VARCHAR(20) NOT NULL,
		ACCOUNT VARCHAR(20) NOT NULL,
		MONEY VARCHAR(512) NOT NULL,
		ACPW VARCHAR(512) NOT NULL,
		IDNUM VARCHAR(512) NOT NULL,
		IND VARCHAR(20) NOT NULL,
		Y1 TEXT(20),
		Y2 TEXT(20),
		Y3 TEXT(20),
		Y4 TEXT(20)
      )
   ";
   $ret=mysqli_query($con,$sql);
   
   if($ret) {
      echo "users 생성 성공";
   }
   else {
      echo "users 생성 실패"."<br>";
      echo "실패 원인 :".mysqli_error($con);
   }
   
   mysqli_close($con);
?>
