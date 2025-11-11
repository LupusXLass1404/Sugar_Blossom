<div class="container mt-3">
    <?php
        $user = $User->find(['username'=>$_SESSION['user']]);
    ?>
    <h2>My Order</h2>

    <!-- <h2>My Favorites List</h2>
    <p>Keep track of your favourite sweets—get notified as soon as they're back in stock!</p>
    <p>No favourites yet! Tap here to explore our menu.</p> -->
</div>