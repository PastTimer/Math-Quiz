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

<div class = "box1">
    <div>
        <h3>Score</h3>
        <h4>Correct: Wrong: </h4>
    </div>
    <a href= index.php>Start Again</a>
</div>

</body>
</html>
