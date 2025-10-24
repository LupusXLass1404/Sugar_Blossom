<?php include_once "../api/db.php";
    $row = $News -> find($_GET['id']);
?>
<div class="modal-header">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <h2 class="modal-title" id="exampleModalLabel"><?=$row['title'];?></h2>

    <div class="menu-img">
        <img src="./upload/<?=$row['img'];?>" alt="">
    </div>
    <p><?=$row['text']?></p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>