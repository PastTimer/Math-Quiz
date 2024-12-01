<!DOCTYPE html>
<html>
<head>
<title>Math Quiz</title>
<style>
body {background-color: powderblue;
    justify-content: center;
    align-content: center;
    display: flex;
    padding: 10%;}
h1   {color: blue;}
p    {color: red;}
.box1{background-color: white;
    border-radius: 12px; 
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border: none;
    padding: 20px;
    width: 50%;}
</style>
</head>
<body>
<?php
session_start();
?>

<form method="post" action="quiz.php" class="box1">
    <p>Select Operator:</p>
    <input type="radio" name="operator" value="+" required> Addition (+)<br>
    <input type="radio" name="operator" value="-" required> Subtraction (-)<br>
    <input type="radio" name="operator" value="x" required> Multiplication (×)<br>

    <p>Select Difficulty:</p>
    <input type="radio" name="difficulty" value="10" required> Easy (1-10)<br>
    <input type="radio" name="difficulty" value="100" required> Medium (1-100)<br>
    <input type="radio" name="difficulty" value="custom" required> Hard (Custom): 
    <input type="number" name="custom_min" placeholder="Min Value" min="1">
    <input type="number" name="custom_max" placeholder="Max Value" min="1"><br><br>

    <p>Additional Settings:</p>
    <label type="" name="items" value="custom"> Number of Items: 
    <input type="number" name="noofitems" placeholder="Enter a number" min="1" required><br>
    <label type="" name="items" value="custom"> Max Difference of choices from the correct answer:
    <input type="number" name="maxdiff" placeholder="Enter a number" min="1" required><br><br>

    <button type="settings">Start Quiz</button>
</form>
</body>
</html>
