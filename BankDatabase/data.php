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
		( 'JAR', SHA2('123456$salt2',512), $salt2, '조아라', HEX(AES_ENCRYPT('01089356119','pw')), HEX(AES_ENCRYPT('서울','pw')),HEX(AES_ENCRYPT('마포구','pw')),
		HEX(AES_ENCRYPT('서교동','pw')),1,0,1,0,0,0,0,1,0,0, '1771114', HEX(AES_ENCRYPT('10000','pw')), SHA2('2222',512), HEX(AES_ENCRYPT('971204','pw')), $index2, '', '', 'Y', 'Y'),
		( 'KE', SHA2('123456$salt3',512), $salt3, '고은', HEX(AES_ENCRYPT('01023199683','pw')), HEX(AES_ENCRYPT('서울','pw')),HEX(AES_ENCRYPT('서대문구','pw')),
		HEX(AES_ENCRYPT('대현동','pw')),1,0,0,0,0,0,0,1,0,1, '1871060', HEX(AES_ENCRYPT('1000','pw')), SHA2('3333',512), HEX(AES_ENCRYPT('030712','pw')), $index3, '', '' , '', ''),
		( 'KYB', SHA2('123456$salt4',512), $salt4, '김유빈', HEX(AES_ENCRYPT('01045436216','pw')), HEX(AES_ENCRYPT('서울','pw')),HEX(AES_ENCRYPT('서대문구','pw')),
		HEX(AES_ENCRYPT('신촌동','pw')),1,0,0,0,0,0,1,1,0,1, '1871066', HEX(AES_ENCRYPT('1000000','pw')), SHA2('4444',512), HEX(AES_ENCRYPT('880104','pw')), $index4, 'Y','','','Y')
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