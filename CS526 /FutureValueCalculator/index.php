<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Future Value Calculator</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <div id="content">
            <h1>Future Value</h1>
            <?php if (!empty($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } // end if ?>
            <form action="future_value.php" method="post">
                <h2>Calculate Future Value</h2>
                <p>The value of an asset or cash at a specified date in the 
                    future that is equivalent in value to a specified sum today.
                </p>
                <div id="data">
                    <label>Present Value:</label>
                    <input type="text" name="present_value"
                           value="<?php if (!empty($present_value)) {echo $present_value;} ?>"/><br />

                    <label>Interest Rate Per Time Period:</label>
                    <input type="text" name="interest_rate"
                           value="<?php if (!empty($interest_rate)) {echo $interest_rate;} ?>"/><br />

                    <label>Number of Time Periods:</label>
                    <input type="text" name="periods"
                           value="<?php if (!empty($periods)) {echo $periods;} ?>"/><br />
                </div>

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate"/><br />
                </div>

            </form>
        </div>
    </body>
</html>
