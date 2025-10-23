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
                        <th>Name</th>
                        <th>Type</th>
                        <th>Depiction</th>
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
                            <input type="name" name="name[]" value="<?=$row['name'];?>" class="input-text">
                        </td>
                        <td>
                            <select name="type[]" class="input-text">
                                <option value="none">none</option>
                                <option value="A" <?=$row['type'] ==='A'?'selected':''?>>A</option>
                                <option value="B" <?=$row['type'] ==='B'?'selected':''?>>B</option>
                                <option value="C" <?=$row['type'] ==='C'?'selected':''?>>C</option>
                            </select>
                        </td>
                        <td>
                            <input type="depiction" name="depiction[]" value="<?=$row['depiction'];?>" class="input-text">
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
                <input type="submit" value="Save" class="admin-button">
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
                            <input type="text" name="add[name][]" value="" class="input-text">
                        </td>
                        <td>
                            <textarea name="add[depiction][]" value="" class="input-text"></textarea>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
        `)
    })
</script>