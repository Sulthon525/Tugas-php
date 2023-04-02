<?php 
function luas_lingkaran ($jari) {
    return 3.14 * $jari * $jari ;
}
//pemanggilan fungsi
$r = 14;
echo "Luas lingkaran dengan Jari-jari $r = ";
echo luas_lingkaran($r);
?>