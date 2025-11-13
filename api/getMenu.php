<?php include_once "db.php";
echo json_encode($Menu -> all(['sh'=>1]));