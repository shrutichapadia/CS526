<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$book_id = $_POST['book_id'];
$publisher_id = $_POST['publisher_id'];

// Delete the product from the database
require_once('db_connect.php');
$query = "DELETE FROM books
          WHERE bookID = '$book_id'";
$db->exec($query);

// display the manage book page
include('index.php');
?>
