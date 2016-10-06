<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Calculator</title>
    </head>
    <body>
        <h1>Simple Calculator</h1>
        <form name="myForm" action="index.php" method="post" >
            N1: <input type="text" name="N1" value="<?php echo $N1; ?>" /><br>
            N1: <input type="text" name="N2" value="<?php echo $N2; ?>" /><br>
            <input type="submit" name="action" value="Add" />
            <input type="submit" name="action" value="Subtract" />
            <input type="submit" name="action" value="Reset" />
            <hr>
            Result: <?php echo $result; ?>
        </form>
    </body>
</html>
