<?php 
function tambah_string ($str){
    $str = $str . ", Jakarta";
    return $str;
}
$str = "Univeraitas Budi luhur";
echo"\$str = $str <br>";
echo tambah_string ($str). "<br>";
echo"\$str = $str <br>";

?>