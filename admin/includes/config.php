<?php
$hname='localhost';
$uname='root';
$pass='';
$db = 'hotel';
$con = mysqli_connect($hname, $uname, $pass, $db);
if(!$con){
    die("cannot connect to database" . mysqli_connect_error());
}

?>