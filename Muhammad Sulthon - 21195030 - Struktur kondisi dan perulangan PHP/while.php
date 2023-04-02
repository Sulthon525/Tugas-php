<?php 
/* contoh 1 */
$i = 1; 
while ($i <= 10) {
	echo $i++;
}
echo "<br><br>";

/* contoh 2*/
$i = 1;
while ($i <= 10):
	echo "$i";
	$i++;
endwhile;
echo "<br><br>";

/* contoh 3*/
$i = 1;
while ($i <= 6) {
	echo "<h$i>teks $i</h$i>";
	$i++;
}
echo"<br>";
echo"kebalikan dari while";

echo"<br> <br>";
/* contoh 1 */
$i = 10; 
while ($i >= 1) {
	echo $i--;
}
echo "<br> <br>";

/* contoh 2*/
$i = 10;
while ($i >= 1):
	echo "$i";
	$i--;
endwhile;
echo "<br><br>";

/* contoh 3*/
$i = 6;
while ($i >= 1) {
	echo "<h$i>teks $i</h$i>";
	$i--;
}
 ?>