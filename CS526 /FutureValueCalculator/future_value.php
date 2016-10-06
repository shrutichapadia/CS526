<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    // get the data from the form
    $present_value = $_POST['present_value'];
    $interest_rate = $_POST['interest_rate'];
    $periods = $_POST['periods'];

    // validate present_value entry
    if ( empty($present_value) ) {
        $error_message = 'Present value is a required field.'; 
    } else if ( !is_numeric($present_value) )  {
        $error_message = 'Present value must be a valid number.'; 
    } else if ( $present_value <= 0 ) {
        $error_message = 'Present value must be greater than zero.';        
    // validate interest rate entry
    } else if ( empty($interest_rate) ) {
        $error_message = 'Interest rate is a required field.'; 
    } else if ( !is_numeric($interest_rate) )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.';        
    // set error message to empty string if no invalid entries
    } else {
        $error_message = '';
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    // calculate the future value
    $future_value = $present_value;
    for ($i = 1; $i <= $periods; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
    }

    // apply currency and percent formatting
    $present_value_f = '$'.number_format($present_value, 2);
    $interest_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
?>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>
    <div id="content">
        <h1>Future Value</h1>

        <label>Present Value::</label>
        <span><?php echo $present_value_f; ?></span><br />

        <label>Interest Rate Per Time Period:</label>
        <span><?php echo $interest_rate_f; ?></span><br />

        <label>Number of Time Periods:</label>
        <span><?php echo $periods; ?></span><br />

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br />
    </div>
</body>
</html>