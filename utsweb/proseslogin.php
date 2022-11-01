<?php
$user = "icha";
$pass = "1234";
if(isset($_POST['Login'])){
    $user = $_POST['un'];
    $pass = $_POST["pw"];
    if($user == "icha" and $pass =="1234"){
    header('location:input3.php');
//echo "Login Berhasil";
}else {
    echo "Login Gagal";
}
}
?>