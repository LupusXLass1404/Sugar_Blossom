<div class="admin-main">
    <div class="admin-fluid">
        <div class="admin-add px-4">
            <button id="add" class="admin-button">Add Data</button>
        </div>
        <form action="./api/save.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th width=50%>Text</th>
                        <th width=5%>Show</th>
                        <th width=5%>Delete</th>
                    </tr>

                    <?php
                        $do=ucfirst($_GET['do']);
                        $rows = $$do -> all();
                        foreach($rows as $row):
                    ?>

                    <tr>
                        <td>
                            <img src="./upload/<?=$row['img'];?>" alt="" width=120x><br>
                            <span class="btn btn-secondary admin-button" onclick="showModal('./modal/upload_img.php?do=<?=$_GET['do'];?>&id=<?=$row['id'];?>')">Change</span>
                        </td>
                        <td>
                            <input type="text" name="title[]" value="<?=$row['title'];?>" class="input-text">
                        </td>
                        <td>
                            <textarea type="text" name="text[]" class="input-text"><?=$row['text'];?></textarea>
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh'] == 1) ? 'checked' : '';?>>
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
                <input type="submit" value="Save changes" class="admin-button">
                <input type="reset" value="Reset" class="admin-button">
            </div>
        </form>
    </div>
</div>

<script>
    $('#add').on('click', function(){
        $('#data').append(`
                    <tr>
                        <td></td>
                        <td>
                            <input type="text" name="add[title][]" value="" class="input-text">
                        </td>
                        <td>
                            <textarea name="add[text][]" value="" class="input-text"></textarea>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
        `)
    })
</script>