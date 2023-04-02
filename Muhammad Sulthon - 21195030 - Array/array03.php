<?php
$arrWarna = array ("Blue","Black","Red","Yellow","Green");

echo "Menampilkan Isi array dengan for : <br>";
for ($i=0; $i<count($arrWarna); $i++){
    echo "Do You Like <font color=$arrWarna[$i]>". $arrWarna[$i] . "</font> ? <br>"  ;
}

    echo "<br> Menampilkan Isi array dengan foreach : <br>";
    foreach ($arrWarna as $warna){
        echo "do you like <font color=$warna>" . $warna . "</font> ? <br>";
    }

?>