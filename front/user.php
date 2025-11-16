<div class="container mt-3" style="min-height:60vh">
    <?php
        $user = $User->find(['username'=>$_SESSION['user']]);
    ?>
    <h2>My Order</h2>
    <?php if($Order->count(['user'=>$_SESSION['user']]) > 0):?>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Order Date</th>
                <th>Pickup Date</th>
                <th>Content</th>
                <th>Total Amount</th>
                <th>Recipient</th>
            </tr>
            <?php
                $rows = $Order->all(['user'=>$_SESSION['user']]);
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
            </tr>
            <?php endforeach;?>
        </table>
    <?php else:?>
        <a href="index.php?do=order">You haven't placed any orders yet. Go ahead and shop now!</a>
    <?php endif;?>
    <!-- <h2>My Favorites List</h2>
    <p>Keep track of your favourite sweets—get notified as soon as they're back in stock!</p>
    <p>No favourites yet! Tap here to explore our menu.</p> -->
</div>