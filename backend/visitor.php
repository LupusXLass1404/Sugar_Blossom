<div class="admin-main">
    <div class="admin-left">
        <table class="admin-table">
            <tr>
                <th>year</th>
                <th>month</th>
                <th>count</th>
            </tr>

            <?php
            // 年統計
            $yearRows = q("
                SELECT YEAR(visit_date) AS year,
                    SUM(visit_count) AS total_count
                FROM sugar_blossom_visitor
                GROUP BY YEAR(visit_date)
                ORDER BY year DESC
            ");

            foreach($yearRows as $y):
            ?>
                <tr>
                    <td><?= $y['year'] ?></td>
                    <td></td>
                    <td><?= $y['total_count'] ?></td>
                </tr>

                <?php
                // 月統計（只取該年的）
                $monthRows = q("
                    SELECT MONTH(visit_date) AS month,
                        SUM(visit_count) AS total_count
                    FROM sugar_blossom_visitor
                    WHERE YEAR(visit_date) = {$y['year']}
                    GROUP BY MONTH(visit_date)
                    ORDER BY month
                ");

                foreach($monthRows as $m):
                ?>
                    <tr>
                        <td></td>
                        <td><?= $m['month'] ?>月</td>
                        <td><?= $m['total_count'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </table>
    </div>


    <div class="admin-right">
        <table class="admin-table">
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
