<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn = mysqli_connect("localhost", "root", "", "mybank");
		if(!$conn) {
			die("Connection failed : ".mysqli_connect_error());
		}
		$city = $_POST["city"];
		$gu = $_POST["gu"];
		$dong = $_POST["dong"];
		
		$sql = "SELECT NAME, AES_DECRYPT(UNHEX(CITY),'pw'), AES_DECRYPT(UNHEX(GU),'pw'), AES_DECRYPT(UNHEX(DONG),'pw'), BF0, BF1, BF2, BF3, BF4, BF5, BF6, BF7, BF8, BF9 FROM users";
		$result = mysqli_query($conn, $sql);
		if($result) {
			while($row = mysqli_fetch_array($result)) {
				
				if ($row["BF0"] == 1 and $city == $row["AES_DECRYPT(UNHEX(CITY),'pw')"]) {
					echo "<br>".$city."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				if ($row["BF5"] == 1 AND $row["BF6"] == 1 and $city == $row["AES_DECRYPT(UNHEX(CITY),'pw')"]) {
					echo "<br>".$city."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				
				if ($row["BF7"] == 1 and $gu == $row["AES_DECRYPT(UNHEX(GU),'pw')"]) {
					echo "<br>".$gu."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				if ($row["BF9"] == 1 and $gu == $row["AES_DECRYPT(UNHEX(GU),'pw')"]) {
					echo "<br>".$gu."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				if ($row["BF7"] == 1 AND $row["BF1"] == 1 and $gu == $row["AES_DECRYPT(UNHEX(GU),'pw')"]) {
					echo "<br>".$gu."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				
				if ($row["BF2"] == 1 and $dong == $row["AES_DECRYPT(UNHEX(DONG),'pw')"]) {
					echo "<br>".$dong."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				if ($row["BF6"] == 1 and $row["BF7"] == 1 and $dong == $row["AES_DECRYPT(UNHEX(DONG),'pw')"]) {
					echo "<br>".$dong."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				if ($row["BF7"] == 1 and $dong == $row["AES_DECRYPT(UNHEX(DONG),'pw')"]) {
					echo "<br>".$dong."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}
				if ($row["BF6"] == 1 AND $row["BF0"] == 1 and $dong == $row["AES_DECRYPT(UNHEX(DONG),'pw')"]) {
					echo "<br>".$dong."에 살 수도 있는 사람들 : ";
					echo $row["NAME"];
				}		
			}
		} else {
			echo "Result Failed";
		}
		mysqli_close($conn);
	}
?>