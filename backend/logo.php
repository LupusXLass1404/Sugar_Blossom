<div class="admin-main">
    <div class="admin-left con-cent">
        <?php
            $rows = $Logo->find(['sh'=>1]);
        ?>
        <div class="logo" style="background-color: #663120; padding: 8px"><?=$rows['text'];?></div>
    </div>
    <div class="admin-right">
        <div class="admin-add px-4">
            <button id="add" class="admin-button">Add Data</button>
        </div>
        <form action="./api/save.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>Text</th>
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
                            <input type="text" name="text[]" value="<?=$row['text'];?>" class="input-text">
                        </td>
                        <td>
                            <input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh'] == 1) ? 'checked' : '';?>>
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
                        <td>
                            <input type="text" name="add[text][]" value="" class="input-text">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
        `)
    })
</script>