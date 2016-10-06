<!DOCTYPE html>
<?php
require 'db_connect.php';

$publisher_id = 1;
if (isset($_GET['publisher_id'])) {
    $publisher_id = $_GET['publisher_id'];
}

// Get the current publisher's name
$query = "SELECT publisherName FROM publishers WHERE publisherID = '$publisher_id'";
$publisher = $db->query($query);
$publisher = $publisher->fetch();
$publiserName = $publisher['publisherName'];

// Get the publisher list
$query = "SELECT * FROM publishers ORDER BY publisherID";
$publishers = $db->query($query);

// Get books for the selected publisher
$query = "SELECT * FROM books WHERE publisherID = '$publisher_id' ORDER BY isbn";
$books = $db->query($query);
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Bookstore</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h1>My Bookstore</h1>
        <div id="sidebar">
            <h2>Publishers</h2>
            <?php foreach ($publishers as $publisher) : ?>
                <ul>
                    <li>
                        <a href="?publisher_id=<?php echo $publisher['publisherID']; ?>">
                            <?php echo $publisher['publisherName']; ?>
                        </a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
        <div id="main">
            <h2><?php echo $publiserName; ?></h2>
            <table>
                <tr>
                    <th>ISBN</th>
                    <th>Book Title</th>
                    <th>Book Price</th>
                </tr>
                <?php foreach ($books as $book) : ?>
                    <tr>
                        <td><?php echo $book['isbn']; ?></td>
                        <td><?php echo $book['bookTile']; ?></td>
                        <td><?php echo $book['bookPrice']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>
