<?php

require_once('helpers.php');

try {
    $dbh = getDatabaseHandler();
    $sql = 'SELECT * ';
    $sql .= 'FROM BookInventory';
    $books = $dbh->query($sql);
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}

require_once('partials/header.php');
?>
    <div class="ui link cards">
<?php
    foreach ($books as $book) {
        echo "<div class='card'>
        
        <div class='content'>
            <div class='header'>
                <a href='checkout.php?book_id={$book['id']}'>{$book['name']}</a>
            </div>
        
        </div>
        <div class='extra content'>
    <div>
            <span>
                <i class='archive icon'></i>
                {$book['quantity']} items
            </span>
</div>
            <a class='ui vertical animated button' tabindex='0' href='checkout.php?book_id={$book['id']}'>
  <div class='hidden content'>{$book['name']} -> <i class='shop icon'></i></div>
  <div class='visible content'>
    <i class='shop icon'></i> Add To Cart
  </div>
</a>
        </div>
        </div>";
    }
?>
    </div>
<?php
require_once('partials/footer.php');
