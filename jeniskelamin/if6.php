<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$r1=$_POST["rad1"];
$r2=$_POST["rad2"];
$r3=$_POST["rad3"];
$r4=$_POST["rad4"];
$d1=$_POST["id1"];
$d2=$_POST["id2"];
$d3=$_POST["id3"];
$d4=$_POST["id4"];

if ($r1=="pria") {
	$rr1="<font color=red>$r1</font>";
}
else {
	$rr1="<font color=blue>$r1</font>";
};
echo $d1," ",$rr1,"<br>";

if ($r2=="pria") {
	$rr2="<font color=red>$r2</font>";
}
else {
	$rr2="<font color=blue>$r2</font>";
};
echo $d2," ",$rr2,"<br>";

if ($r3=="pria") {
	$rr3="<font color=red>$r3</font>";
}
else {
	$rr3="<font color=blue>$r3</font>";
};
echo $d3," ",$rr3,"<br>";

if ($r4=="pria") {
	$rr4="<font color=red>$r4</font>";
}
else {
	$rr4="<font color=blue>$r4</font>";
};
echo $d4," ",$rr4,"<br>";
?>
	<form method=post action="if6.html">
		<table border=0>
			<tr>
				<td><input type=submit value=back></td>
			</tr>
			</form>
</body>
</html>