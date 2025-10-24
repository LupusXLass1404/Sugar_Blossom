<?php include_once"./db.php";
// dd($_POST);

$do=ucfirst($_GET['do']);

if(isset($_POST['add'])){
    // 先刪除新增資料的
    $add = $_POST['add'];
    unset($_POST['add']);
}

// 修改原有的資料
if(!empty($_POST)){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST['del']) && in_array($id, $_POST['del'])){
            $$do->del($id);
        }else{
            $row=$$do->find($id);

            if(isset($row['name'])){
                $row['name'] = $_POST['name'][$idx];
            }
            if(isset($row['title'])){
                $row['title'] = $_POST['title'][$idx];
            }
            if(isset($row['text'])){
                $row['text'] = $_POST['text'][$idx];
            }
            if(isset($row['type'])){
                $row['type'] = $_POST['type'][$idx];
            }
            if(isset($row['depiction'])){
                $row['depiction'] = $_POST['depiction'][$idx];
            }
            if(isset($row['sh'])){
                if(is_array($_POST['sh'])){
                    $row['sh'] = (in_array($id, $_POST['sh'])) ? 1 : 0;
                } else {
                    $row['sh'] = ($_POST['sh']==$id) ? 1 : 0;
                }
            }
            if(isset($row['left_sh'])){
                $row['left_sh'] = (isset($_POST['left_sh']) && $_POST['left_sh']==$id) ? 1 : 0;
            }
            if(isset($row['right_sh'])){
                $row['right_sh'] = (isset($_POST['right_sh']) && $_POST['right_sh']==$id) ? 1 : 0;
            }
            // dd($row);
            $$do->save($row);
        }
    }
}
// 新增資料區
if(isset($add)){
    // 整理資料
    foreach($add as $name => $rows){
        echo $name;
        foreach($rows as $idx => $row){
            if (!empty($row)){
                $tmp[$idx][$name] = $row;
            }
        }
    }

    // dd($tmp);
    // 新增
    if (isset($tmp)){
        foreach($tmp as $idx => $rows){
            // dd($tmp[$idx]);
            $$do->save($tmp[$idx]);
        }
    }
}

if ($_GET['do'] === "menu_type") {
    to("../admin.php?do=menu");
} else {
    to("../admin.php?do={$_GET['do']}");
}