<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$c=$_POST["cari"];
$i=$_POST["isi"];
$k=explode(" ",$i);
for ($x=0; $x<count($k); $x++) {
	if ($k[$x]==$c) {
		echo $k[$x]="<b>$c</b>"." ";
	}
	else {
		echo $k[$x]." ";
	}
}
?>
</body>
</html>