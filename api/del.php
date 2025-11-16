<?php include_once"./db.php";
// dd($_POST);

$do=ucfirst($_GET['do']);

if(!empty($_POST)){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST['del']) && in_array($id, $_POST['del'])){
            $$do->del($id);
        }
    }
}

to("../admin.php?do={$_GET['do']}");