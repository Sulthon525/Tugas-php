<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
    </head>
    <body>
 <center><h3> MASUKKAN NILAI </h3></center>
        <form method="POST">
   <table width="450" border="1" align="center">
  
      <td><strong>Masukan Nilai</strong></td>
      <td><input name="nilai1" type="text" value ="<?php echo $nilai1; ?>"/></br></td> 
      <td><center> <input type="submit" name="submit" value="SUBMIT"/><br/></td></center>
  </table>
  <center>
  <table width="450" border="1" >
  <td><center><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 49) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = E.  <br> ';
            } else if ($nilai1 >= 50 && $nilai1 <= 59) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D.  <br> ';
            } else if ($nilai1 >= 60 && $nilai1 <= 69) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  <br> ';
            } else if ($nilai1 >= 70 && $nilai1 <= 79) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> ';
            } else if ($nilai1 >= 80 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> ';
            } 
   
   else{
                echo 'Nilai : ' . $nilai1 ;
            }
          ?> </td></center> 
        </form>
  </table>
    </body>
</html>