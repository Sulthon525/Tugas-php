<?php
if (isset($POST['Login'])){
$user = $_POST ['username'];
$pass = $_POST ['password'];

if($user == "achmathim" && $pass == "123"){
    echo "<h2>Login Berhasil</h2>";
} else
{echo "<h2>Login Gagalk</h2>";
}
}
?>