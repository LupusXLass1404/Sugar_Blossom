<?php include_once"./db.php";
// dd($_POST);

$do=ucfirst($_GET['do']);

if(isset($_POST['add'])){
    // 先刪除新增資料的
    $add = $_POST['add'];
    unset($_POST['add']);
}

function row($name, $data){
    if(isset($row[$name])){
        $row[$name] = $data;
    }
}

// 修改原有的資料
foreach($_POST['id'] as $idx => $id){
    if(isset($_POST['del']) && in_array($id, $_POST['del'])){
        $$do->del($id);
    }else{
        $row=$$do->find($id);

        if(isset($row['title'])){
            $row['title'] = $_POST['title'][$idx];
        }
        if(isset($row['text'])){
            $row['text'] = $_POST['text'][$idx];
        }

        $row['sh'] = (isset($_POST['sh']) && $_POST['sh']==$id) ? 1 : 0;
        
        // dd($row);
        $$do->save($row);
    }
}

// 新增資料區
if(isset($add)){
    // 整理資料
    foreach($add as $name => $rows){
        foreach($rows as $row){
            if (!empty($row)){
                // dd($rows);
                $tmp[] = [$name => $row];
            }
        }
    }
    
    // 新增
    if (isset($tmp)){
        foreach($tmp as $idx => $rows){
            // dd($tmp[$idx]);
            $$do->save($tmp[$idx]);
        }
    }
}

to("../admin.php?do={$_GET['do']}");
?>