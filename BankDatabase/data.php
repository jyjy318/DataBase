<?php
	$con=mysqli_connect("localhost", "root", "", "mybank")
	or die("MySQL 접속 실패 !!");
	
	$salt1 = random_int(0,10000);
	$salt2 = random_int(0,10000);
	$salt3 = random_int(0,10000);
	$salt4 = random_int(0,10000);
	
	$index1 = 1;
	$index2 = 2;
	$index3 = 3;
	$index4 = 4;
	
	$sql="
		INSERT INTO users VALUES
		( 'MJY', SHA2('123456$salt1',512), $salt1, '문지예', HEX(AES_ENCRYPT('01091053955','pw')), HEX(AES_ENCRYPT('부산','pw')), HEX(AES_ENCRYPT('해운대구','pw')),
		HEX(AES_ENCRYPT('우동','pw')),1,1,0,0,0,1,1,1,0,0, '1770027', HEX(AES_ENCRYPT('100000','pw')), SHA2('1111',512), HEX(AES_ENCRYPT('770318','pw')), $index1, 'Y', 'Y', '', ''),
		
	";
	$ret=mysqli_query($con,$sql);
	
	if($ret) {
		echo "데이터가 성공적으로 입력됨";
	}
	else {
		echo "데이터 입력 실패"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	}
	
	mysqli_close($con);
?>
