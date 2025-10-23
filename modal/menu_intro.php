<?php include_once "../api/db.php";
    $row = $Menu -> find($_GET['id']);
?>
<div class="modal-header">
    <span class="modal-title" id="exampleModalLabel"><?=$row['name'];?></span>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="menu-img">
        <img src="./upload/<?=$row['img'];?>" alt="<?=$row['name']?>">
    </div>
    <p class="cent">— <?=$row['type']?> —</p>
    <p><?=$row['depiction']?></p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>