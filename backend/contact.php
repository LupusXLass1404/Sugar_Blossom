<div class="admin-main">
    <div class="admin-fluid">
        <form action="./api/del.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>Contact Date</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th width=5%>Delete</th>
                    </tr>

                    <?php
                        $do=ucfirst($_GET['do']);
                        $rows = $$do -> all([], "ORDER BY created_at DESC");
                        foreach($rows as $row):
                    ?>

                    <tr>
                        <td><?=$row['created_at'];?></td>
                        <td><?=!empty($row['name']) ? $row['name'] : '-';?></td>
                        <td><?=!empty($row['tel']) ? $row['tel'] : '-';?></td>
                        <td><?=!empty($row['email']) ? $row['email'] : '-';?></td>
                        <td><?=nl2br($row['message']);?></td>

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