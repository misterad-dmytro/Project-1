<?php

function getDatabaseHandler() {
    static $dbh = null;

    if ($dbh) {
        return $dbh;
    }

    $dsn = 'mysql:dbname=school_project;host=localhost';
    $user = 'misterad';
    $password = '1234512345qwerty';
    $dbh = new PDO($dsn, $user, $password);
    return $dbh;
}

function getBookById($bookId) {
    $dbh = getDatabaseHandler();
    $sql = 'SELECT * ';
    $sql .= 'FROM BookInventory ';
    $sql .= " WHERE BookInventory.id = {$bookId}";
    $rows = $dbh->query($sql)->fetchAll();

    if (count($rows) === 0) {
        return null;
    }

    return $rows[0];
}

function createCustomer($firstName, $lastName) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('INSERT INTO Customers VALUES (DEFAULT, ?, ?)');
    $statement->execute([$firstName, $lastName]);
    return $dbh->lastInsertId();
}

function createCreditCard($number, $name, $expiration, $cvv) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('INSERT INTO CreditCards VALUES (DEFAULT, ?, ?, ?, ?)');
    $statement->execute([$number, $name, $expiration, $cvv]);
    return $dbh->lastInsertId();
}

function createOrder($bookId, $customerId, $creditCardId, $quantity) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('INSERT INTO Orders VALUES (DEFAULT, ?, ?, ?, ?)');
    $statement->execute([$bookId, $customerId, $creditCardId, $quantity]);
    return $dbh->lastInsertId();
}

function decreaseQuantity($bookId, $numberToSubtract) {
    $dbh = getDatabaseHandler();
    $statement = $dbh->prepare('UPDATE BookInventory SET quantity = quantity - ? WHERE id = ?');
    $statement->execute([$numberToSubtract, $bookId]);
}

