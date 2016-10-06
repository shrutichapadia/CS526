<?php

// Data Initailzatiomn
$N1 = '';
$N2 = '';
$result = '';
$action = '';

// Find out what action to take
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}

if( $action === 'Add') {
    $N1 = $_POST['N1'];
    $N2 = $_POST['N2'];
    $result = $N1 + $N2;
} else if( $action === 'Subtract') {
    $N1 = $_POST['N1'];
    $N2 = $_POST['N2'];
    $result = $N1 - $N2;
} else if( $action === 'Reset') {
    header("Location:index.php");
}


include ("calculator.php");