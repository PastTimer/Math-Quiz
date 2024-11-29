<!DOCTYPE html>
<html>
<head>
<title>Math Quiz</title>
<style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
.box1{background-color: white;
    border-radius: 12px; 
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border: none;
    padding: 20px;}
</style>
</head>
<body>
<?php
session_start();
?>

<form method="post" action="quiz.php" class="box1">
    <p>Select Operator:</p>
    <input type="radio" name="operator" value="Addition" required> Addition (+)<br>
    <input type="radio" name="operator" value="Subtraction" required> Subtraction (-)<br>
    <input type="radio" name="operator" value="Multiplication" required> Multiplication (×)<br>

    <p>Select Difficulty:</p>
    <input type="radio" name="difficulty" value="10" required> 1 to 10<br>
    <input type="radio" name="difficulty" value="100" required> 1 to 100<br>
    <input type="radio" name="difficulty" value="custom" required> Custom<br>
    <input type="number" name="custom_min" placeholder="Min Value" min="1">
    <input type="number" name="custom_max" placeholder="Max Value" min="1"><br>

    <button type="submit">Start Quiz</button>
</form>

<div class = "box1">
    <p>Quiz</p>
</div>

</body>
</html>
