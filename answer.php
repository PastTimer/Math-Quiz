<?php
session_start();

if (!isset($_SESSION['correct_count'])) {
    $_SESSION['correct_count'] = 0;}

if (!isset($_SESSION['wrong_count'])) {
    $_SESSION['wrong_count'] = 0;}

if (!isset($_SESSION['current_item'])) {
    $_SESSION['current_item'] = 1;}

if (!isset($_SESSION['noofitems'])) {
    $_SESSION['noofitems'] = isset($_POST['noofitems']) ? (int)$_POST['noofitems'] : 1;}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ans'])) {
    $user_answer = $_POST['ans'];
    if ($user_answer == $_SESSION['correct_answer']) {
        $_SESSION['correct_count']++;
    } else {
        $_SESSION['wrong_count']++;
    }
    $_SESSION['current_item']++;
}
?>

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
    width: 50%;
    align-content: center;}
</style>
</head>
<body>
<div class="box1">
<?php 
if ($_SESSION['current_item'] > $_SESSION['noofitems']) {
    echo "<h2>Quiz Over</h2>";
    echo "<p>Your score: " . $_SESSION['correct_count'] . " out of " . $_SESSION['noofitems'] . "</p>";
    echo "<a href= index.php>Start Again</a>";
    session_destroy(); 
} else {
    header("Location: quiz.php");
    exit();
}
?>
</div>
</body>
</html>
