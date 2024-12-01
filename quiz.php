<!DOCTYPE html>
<html>
<head>
<title>Math Quiz</title>
<style>
body {background-color: powderblue;
    justify-content: center;
    display: flex;
    padding: 10%;}
h1   {color: blue;}
h2   {color: blue;}
p    {color: black;
    font-size: 2em;}
form{color: black;
    font-size: 1.3em;
    line-height: 1em;}
.box1{background-color: white;
    border-radius: 12px; 
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border: none;
    padding: 20px;
    width: 50%;
    display: flex;
    justify-content: space-between;
    align-items: center;}
</style>
</head>
<body>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operator = $_POST['operator'];
    $difficulty = $_POST['difficulty'];
    if ($difficulty == 'custom') {
        $min = $_POST['custom_min'];
        $max = $_POST['custom_max'];
    } else {
        $min = 1;
        $max = $difficulty;
    }
}

$number1 = rand($min, $max);
$number2 = rand($min, $max);

?>

<div class = "box1">
    <div>
        <h2>Score</h2>
        <h4>Correct: </h4>
        <h4>Wrong: </h4>
        <a href= index.php>Start Again</a><br><br>
        <a href=index.php>Close Quiz</a>
    </div>
    <div style="margin-right:220px;">
        <h1>Math Quiz</h1>
        <form method="post" action="quiz.php">
            <p><?php echo "$number1 $operator $number2 = ?" ?></p>
            <input type="radio" name="ans" value="" required> A. <br>
            <input type="radio" name="ans" value="" required> B. <br>
            <input type="radio" name="ans" value="" required> C. <br>
            <input type="radio" name="ans" value="" required> D. <br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
