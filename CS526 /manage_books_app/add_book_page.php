<?php
    require('db_connect.php');
    $query = "SELECT * FROM publishers ORDER BY publisherID";
    $publishers = $db->query($query);
?>
<!DOCTYPE html>
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
        <h1>Add Product Page</h1>
        <div id="main">
        <form action="add_book.php" method="post" id="add_product_page">
            <label>Publisher:</label>
            <select name="publisher_id">
                <?php foreach ($publishers as $publisher) : ?>
                <option value="<?php echo $publisher['publisherID']; ?>">
                    <?php echo $publisher['publisherName']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <br />
            <label>ISBN:</label>
            <input type=text" name="isbn" /> 
            <br />
            <label>Title:</label>
            <input type=text" name="book_title" /> 
            <br />
            <label>Price:</label>
            <input type=text" name="book_price" /> 
            <br />
            <label>&nbsp;</label>
            <input type="submit" value="Add Book" /> 
            <br />
        </form>
        </div>
        <p style="clear:both;padding:30px;"><a href="index.php">Book List</a></p>
    </body>
</html>
