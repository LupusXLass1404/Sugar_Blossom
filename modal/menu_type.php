 <?php include_once "../api/db.php";?>
<div class="modal-header">
    <span class="modal-title" id="exampleModalLabel">Edit menu type</span>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="admin-main">
    <div class="admin-fluid">
        <div class="admin-add px-4">
            <button id="add_type" class="admin-button">Add Data</button>
        </div>
        <form action="./api/save.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data_type" class="admin-table">
                    <tr>
                        <th>Text</th>
                        <th width=5%>Delete</th>
                    </tr>

                    <?php
                        $do=ucfirst($_GET['do']);
                        $rows = $$do -> all();
                        foreach($rows as $row):
                    ?>

                    <tr>
                        <td>
                            <input type="text" name="type[]" value="<?=$row['type'];?>" class="input-text">
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>

                    <?php
                        endforeach;
                    ?>

                </table>
            </div>
            <div class="admin-buttons">
                <input type="submit" value="Save" class="admin-button">
                <input type="reset" value="Reset" class="admin-button">
            </div>
        </form>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>

<script>
    $('#add_type').on('click', function(){
        $('#data_type').append(`
                    <tr>
                        <td>
                            <input type="type" name="add[type][]" value="" class="input-text">
                        </td>
                        <td></td>
                    </tr>
        `)
    })
</script>
