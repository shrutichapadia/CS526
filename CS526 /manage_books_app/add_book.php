<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Get the book info
$publisher_id = $_POST['publisher_id'];
$isbn = $_POST['isbn'];
$title = $_POST['book_title'];
$price = $_POST['book_price'];

// validate inputs
if (empty($isbn) || empty($title) || empty($price)) {
    $error_msg = 'Invalid input data';
    include('db_error.php');
}
else {
    require('db_connect.php');
    $query = "INSERT INTO books
        (publisherID, isbn, bookTile, bookPrice)
        VALUES
        ('$publisher_id', '$isbn', '$title', '$price')";
    $result = $db->exec($query);
    include('index.php');
}
