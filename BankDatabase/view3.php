<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn = mysqli_connect("localhost", "root", "", "mybank");
		if(!$conn) {
			die("Connection failed : ".mysqli_connect_error());
		}
		
		$account = $_POST["account"];
		$acpw = $_POST["acpw"];
		
		$sql = "SELECT ACPW, AES_DECRYPT(UNHEX(MONEY),'pw') FROM users WHERE ACCOUNT='".$account."'";
		
		$result=mysqli_query($conn, $sql);
		if($result) {
			while($row = mysqli_fetch_array($result)) {
				$token = hash('sha512',"$acpw");
				if ($row["ACPW"] == $token) {
					echo "잔액 : ".$row["AES_DECRYPT(UNHEX(MONEY),'pw')"]."원";
				} else {
					echo "비밀번호를 다시 확인해주세요.";
				}
			}
		} else {
			echo "Result Failed";
		}
		mysqli_close($conn);
	}
?>