<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
    // get the data from the form
    $student_name = $_POST['student_name'];
    $student_scores = $_POST['student_scores'];
    $student_id = $_POST['student_id'];
    
    // calculate the grade
    if ($student_scores >= 90) {
        $student_grade = 'A';
    }
    else if ($student_scores >= 80) {
        $student_grade = 'B';
    }
    else if ($student_scores >= 70) {
        $student_grade = 'C';
    }
    else {
        $student_grade = 'F';
    }
?>
<html>
<head>
    <title>Scores to Grade Converter</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>
    <div id="content">
        <h1>Scores to Grade Converter</h1>

        <label>Student's name:</label>
        <span><?php echo $student_name; ?></span><br />

        <label>Student's ID:</label>
        <span><?php echo $student_id; ?></span><br />

        <label>Student's Scores:</label>
        <span><?php echo $student_scores; ?></span><br />

        <label>Student's Grade:</label>
        <span><?php echo $student_grade; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>