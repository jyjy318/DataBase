<?php
	$a1 = (int)SHA1('서울');
	$a2 = (int)SHA1('부산');
	$b1 = (int)SHA1('서대문구');
	$b2 = (int)SHA1('마포구');
	$b3 = (int)SHA1('해운대구');
	$c1 = (int)SHA1('신촌동');
	$c2 = (int)SHA1('대현동');
	$c3 = (int)SHA1('서교동');
	$c4 = (int)SHA1('우동');
	$n = 10;
	$A1 = (int)hash("sha256","서울");
	$A2 = (int)hash("sha256",'부산');
	$B1 = (int)hash("sha256",'서대문구');
	$B2 = (int)hash("sha256",'마포구');
	$B3 = (int)hash("sha256",'해운대구');
	$C1 = (int)hash("sha256",'신촌동');
	$C2 = (int)hash("sha256",'대현동');
	$C3 = (int)hash("sha256",'서교동');
	$C4 = (int)hash("sha256",'우동');
	
	echo $a1 % $n;
	echo $a2 % $n;
	echo $b1 % $n;
	echo $b2 % $n;
	echo $b3 % $n;
	echo $c1 % $n;
	echo $c2 % $n;
	echo $c3 % $n;
	echo $c4 % $n;
	echo $A1 % $n;
	echo $A2 % $n;
	echo $B1 % $n;
	echo $B2 % $n;
	echo $B3 % $n;
	echo $C1 % $n;
	echo $C2 % $n;
	echo $C3 % $n;
	echo $C4 % $n
	
?>