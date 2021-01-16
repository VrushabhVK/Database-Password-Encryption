<?php
require_once('dbconfig/config.php'); // Your Database Name or File
$pass = "123"; // database stored password

$str_pass = password_hash($pass, PASSWORD_BCRYPT);
echo $str_pass;
$query = "insert into user (password) values('$str_pass')";
                $query_run = mysqli_query($con,$query);

$newpass = "123"; // new password
$pass_check = password_verify($newpass, $str_pass);

if($pass_check){
    echo "<br> login successful!";
}else{
    echo "login incorrect";
}
?>
