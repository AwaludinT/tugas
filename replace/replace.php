<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$i=$_POST["isi"];
$r=$_POST["rep1"];
$rr="<b><font color=red>$r</b></font>";
$r2=$_POST["rep2"];
$rr2="<b><font color=red>$r2</b></font>";
$tg1=str_replace($r, $rr2, $i);
$tg=str_replace($r, $rr, $i);
echo "Kalimat asli<br><br>$tg<br><br>";

echo "Kalimat setelah direplace<br><br>$tg1";
?>
	<form method=post action="findText2.html">
		<table border=0>
			<tr>
				<td><input type=submit value=back></td>
			</tr>
			</form>
</body>
</html>