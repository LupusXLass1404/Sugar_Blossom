<div class="admin-main">
    <div class="admin-fluid">
        <form action="./api/del.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>No</th>
                        <th>Order Date</th>
                        <th>Pickup Date</th>
                        <th>Content</th>
                        <th>Total Amount</th>
                        <th>Recipient</th>
                    </tr>

                    <?php
                        $do=ucfirst($_GET['do']);
                        $rows = $$do -> all([], "ORDER BY created_at DESC");
                        foreach($rows as $row):
                    ?>

                    <tr>
                        <td><?=$row['order_number'];?></td>
                        <td><?=$row['created_at'];?></td>
                        <td><?=$row['pickup'];?></td>
                        <td>
                            <?php
                                $items = json_decode($row['item'], true);
                                $menu = $Menu -> all();

                                $menuMap = [];
                                foreach ($menu as $m) {
                                    $menuMap[$m['id']] = [
                                        'name' => $m['name'],
                                        'price' => $m['price']
                                    ];
                                }

                                foreach ($items as $item) {
                                    $id = $item['id'];
                                    $qty = $item['qty'];

                                    if(isset($menuMap[$id])) {
                                        $name = $menuMap[$id]['name'];
                                        $price = $menuMap[$id]['price'];
                                        $subtotal = number_format($price * $qty, 2);

                                        echo "$name x$qty = £$subtotal<br>";
                                    } else {
                                        echo "error";
                                    }
                                }
                            ?>
                        </td>
                        <td>£<?=$row['total'];?></td>
                        <td>
                            Name: <?=$row['customer_name'];?>
                            <br>
                            Phone: <?=$row['customer_phone'];?>
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