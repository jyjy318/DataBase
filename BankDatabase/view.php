<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn = mysqli_connect("localhost", "root", "", "mybank");
		if(!$conn) {
			die("Connection failed : ".mysqli_connect_error());
		}
		$year = $_POST["year"];
		
		$index1 = 1;
		$index2 = 2;
		$index3 = 3;
		$index4 = 4;
	
		if (2000 <= $year and $year < 2010) {
			$year = $index3;
		} else if (1990 <= $year) {
			$year = $index2;
		} else if (1980 <= $year) {
			$year = $index4;
		} else if (1970 <= $year) {
			$year = $index1;
		} else {
			$year = $index3;
		}
		
		$sql = "SELECT * FROM users";
		$result=mysqli_query($conn, $sql);
		if($result) {
			while($row = mysqli_fetch_array($result)) {
				if ($row["IND"] == $year) {
					if ($row["Y1"] == "Y" or $row["Y2"] == "Y" or $row["Y3"] == "Y" or $row["Y4"] == "Y") {
						if ($row["Y1"] == "Y") {
							echo "퇴직예금 ";
						}
						if ($row["Y2"] == "Y") {
							echo "주택대출 ";
						}
						if ($row["Y3"] == "Y") {
							echo "주택예금 ";
						}
						if ($row["Y4"] == "Y") {
							echo "여행적금 ";
						} echo "에 가입되어있습니다.";
						break;
					} else {
					echo "가입된 상품이 없습니다.";
					}
				} 
			}
		} else {
			echo "Result Failed";
		}
		mysqli_close($conn);
	}
?>