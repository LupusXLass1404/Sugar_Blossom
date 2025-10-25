<div class="admin-main">
    <div class="admin-fluid">
        <div class="admin-left">

        </div>
        <div class="admin-right">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>date</th>
                        <th width=5%>count</th>
                    </tr>

                    <?php
                        $do=ucfirst($_GET['do']);
                        $rows = $$do -> all();
                        foreach($rows as $row):
                    ?>

                    <tr>
                        <td>
                            <?=$row['visit_date'];?>
                        </td>
                        <td>
                            <?=$row['visit_count'];?>
                        </td>

                    </tr>

                    <?php
                        endforeach;
                    ?>

                </table>
            </div>
        </div>
    </div>
</div>
