<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="input">
            Masukan angka:<br>
        <input type="text" name="angka"><br>
             Masukan Saran Anda :<br>
            <textarea name="saran" cols="70" rows="10"></textarea> <br><br>
            <input type="submit" name="input" value="klik!">
</FORM>
</body>
</html>

<?php
if (isset($_POST['input'])) {

    $int = $_POST['angka'];
    $str = $_POST['saran'];
    echo "<b>1. String asli</b> : $str";
    echo "<br><b>2. strtolower()</b> : ". strtolower($str);
    echo "<br><b>3. strtoupper()</b> : ". strtoupper($str);
    echo "<br><b>4. ucfirst() :</b> ". ucfirst($str);
    echo "<br><b>5. ucwords() :</b> ". ucwords($str);
    echo "<br><b>6. strrev() :</b> ". strrev($str);
    echo "<br><b>7. Jumlah karakter</b> : ". strlen($str);
    echo "<br><b>8. menambahkan backslashes (\) di setiap
    tanda kutip (quote) dalam string</b> : ". addslashes($str);
    echo "<br><b>9. menghasilkan karakter dari bilangan ASCII</b> : ". chr($int);
    echo "<br><b>me10. ngubah semua tag html menjadi
    HTML entities</b> : ". htmlentities($str);
    echo "<br><b>11. mengubah semua karakter khusus
    menjadi HTML</b> : ". htmlspecialchars($str);
    echo "<br><b>12. menghapus karakter tertentu (“ “, \t, \n, \r, \0,
    \x0B) di awal string()</b> : ". ltrim($str);
    echo "<br><b>13. menghasilkan string terenkripsi searah()</b> : ". md5($str);
    echo "<br><b>14. menambahkan HTML line break (<BR>) sebelum
    semua baris baru dalam string()</b> : ". nl2br($str);
    echo "<br><b>15. number_format()</b> : ". number_format($int);
    echo "<br><b>16. menghasilkan kode ASCII dari suatu karakter()</b> : ". ord($str);
    echo "<br><b>17.  menghapus karakter tertentu (“ “, \t, \n, \r, \0,
    \x0B) di akhir
    string.</b> : ". rtrim($str);
    echo "<br><b>18. mengabaikan HTML dan PHP tag dalam
    string</b> : ". strip_tags($str);
    echo "<br><b>19. menghilangkan backslashes (\) dalam
    string()</b> : ". stripslashes($str);
    echo "<br><b>20. mengubah huruf pertama dari semua string menjadi
    Upper-case</b> : ". ucfirst($str);
    echo "<br><b>21. mengubah huruf pertama tiap kata dalam string
    menjadi uppercase()</b> : ". ucwords($str);
    echo "<br><b>22. memotong sejumlah karakter dalam string dengan
    stringbreak-character()</b> : ". wordwrap($str);
    
}
?>