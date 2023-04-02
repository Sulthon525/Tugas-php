<?php 
$nilai = 90;

if ($nilai >= 90 && $nilai <= 100){
	echo "Nilai Anda $nilai , grade A";
}else if ($nilai >= 80 && $nilai <=89) {
	echo "Nilai Anda $nilai , grade B";
}else if ($nilai >= 70 && $nilai <=79) {
	echo "Nilai Anda $nilai , grade C";
}else if ($nilai >= 60 && $nilai <=69) {
	echo "Nilai Anda $nilai , grade D";
} else {
	echo "Nilai Anda $nilai , grade E";
}

 ?>