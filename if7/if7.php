<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$wal1=$_POST["a"];
$wal2=$_POST["b"];
$wal3=$_POST["c"];

if ($wal1>$wal2) {
	if ($wal1>$wal3) {
		echo "Dari terbesar : ",$wal1," ";$t=$wal1;
			if ($wal2>$wal3) {
				echo $wal2," ";
				echo $wal3;}
			else{
				echo $wal3," ";
				echo $wal2;
			}
	}
	else{
		echo "Dari terbesar : ",$wal3," ";$t=$wal3;
		if ($wal1>$wal2) {
			echo $wal1," ";
			echo $wal2;
		}
		else{
			echo $wal2," ";
			echo $wal1;
		}
	}
}
else{
	if ($wal2>$wal3) {
		echo "Dari terbesar : ",$wal2," ";$t=$wal2;
		if ($wal3>$wal1) {
			echo $wal3," ";
			echo $wal1;
		}
		else{
			echo $wal1," ";
			echo $wal3;
		}
	}
	else{
		echo "Dari terbesar : ",$wal3," ";$t=$wal3;
		if ($wal2>$wal1) {
			echo $wal2," ";
			echo $wal1;
		}
		else{
			echo $wal1," ";
			echo $wal2;
		}
	}
}

echo "<br>";

if ($wal1<$wal2) {
	if ($wal1<$wal3) {
		echo "Dari terkecil : ",$wal1," ";$tk=$wal1;
			if ($wal2<$wal3) {
				echo $wal2," ";
				echo $wal3;}
			else{
				echo $wal3," ";
				echo $wal2;
			}
	}
	else{
		echo "Dari terkecil : ",$wal3," ";$tk=$wal3;
		if ($wal1<$wal2) {
			echo $wal1," ";
			echo $wal2;
		}
		else{
			echo $wal2," ";
			echo $wal1;
		}
	}
}
else{
	if ($wal2<$wal3) {
		echo "Dari terkecil : ",$wal2," ";$tk=$wal2;
		if ($wal3<$wal1) {
			echo $wal3," ";
			echo $wal1;
		}
		else{
			echo $wal1," ";
			echo $wal3;
		}
	}
	else{
		echo "Dari terkecil : ",$wal3," ";$tk=$wal3;
		if ($wal2<$wal1) {
			echo $wal2," ";
			echo $wal1;
		}
		else{
			echo $wal1," ";
			echo $wal2;
		}
	}
}

echo "<br><br>Yang terbesar adalah : ",$t,"<br>Yang terkecil adalah : ",$tk;
?>
	<form method=post action="if7.html">
		<table border=0>
			<tr>
				<td><input type=submit value=back></td>
			</tr>
			</form>
</body>
</html>