<?php
require('../includes/essentials.php');
require('../includes/config.php');

adminLogin();

$hname='localhost';
$uname='root';
$pass='';
$db = 'hotel';
$con = mysqli_connect($hname, $uname, $pass, $db);
if(!$con){
    die("cannot connect to database" . mysqli_connect_error());
}

function getGeneralSettings($con) {
  $q = "SELECT *FROM `settings` WHERE `sr_no`=?";
  $values = [1];
  $res = mysqli_query($con, $q);
  $data = mysqli_fetch_assoc($res);
  $json_data = json_encode($data);
  echo $json_data;
}

if(isset($_POST['get_General'])) {
  getGeneralSettings($con);
}

?>
