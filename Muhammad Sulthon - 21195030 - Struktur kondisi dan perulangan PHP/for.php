<?php 
/* contoh 1 */

for ($i = 1; $i <= 10; $i++){
	echo "$i ";
}
echo "<br><br>";

/* contoh 2*/
for ($i = 1; ; $i++) {
	if ($i > 10) {
		break;
	}
	echo "$i ";
}
echo "<br><br>";

/* contoh 3*/
$i = 1;
for (; ; ){
	if ($i > 10 ){
		break;
	}
	echo "$i ";
	$i ++;
}	echo "<br><br>";
/* contoh 4 */
for($si = 1; $i <= 10; print "$i ", $i++);
echo"<br>";
echo"kebalikan dari for";
echo "<br><br>";
/* contoh 1 */

for ($i = 10; $i >= 1; $i--){
	echo "$i ";
}
echo "<br><br>";

/* contoh 2*/
for ($i = 10; ; $i--) {
	if ($i < 1) {
		break;
	}
	echo "$i ";
}
echo "<br><br>";

/* contoh 3*/
$i = 10;
for (; ; ){
	if ($i < 1 ){
		break;
	}
	echo "$i ";
	$i --;
}	echo "<br><br>";

/* contoh 4 */

for($i = 10; $i >= 1; print "$i ", $i--);


 ?>