<?php
session_start();

if (!isset($_SESSION['correct_count'])) {
    $_SESSION['correct_count'] = 0;
}
if (!isset($_SESSION['wrong_count'])) {
    $_SESSION['wrong_count'] = 0;
}
if (!isset($_SESSION['current_item'])) {
    $_SESSION['current_item'] = 1;
}
if (!isset($_SESSION['noofitems'])) {
    $_SESSION['noofitems'] = 5;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['operator'] = $_POST['operator'];
    $_SESSION['difficulty'] = $_POST['difficulty'];
    $_SESSION['noofitems'] = $_POST['noofitems'];
    $_SESSION['maxdiff'] = $_POST['maxdiff'];

    if ($_POST['difficulty'] == 'custom') {
        $_SESSION['min'] = $_POST['custom_min'];
        $_SESSION['max'] = $_POST['custom_max'];
    } elseif ($_POST['difficulty'] == '100') {
        $_SESSION['min'] = 11;
        $_SESSION['max'] = $_POST['difficulty'];
    } else {
        $_SESSION['min'] = 1;
        $_SESSION['max'] = $_POST['difficulty'];
    }
}

$operator = $_SESSION['operator'];
$difficulty = $_SESSION['difficulty'];
$min = $_SESSION['min'];
$max = $_SESSION['max'];
$maxdiff = $_SESSION['maxdiff'];

$number1 = rand($min, $max);
$number2 = rand($min, $max);

switch ($operator) {
    case '+':
        $correct_answer = $number1 + $number2;
        break;
    case '-':
        $correct_answer = $number1 - $number2;
        break;
    case 'x':
        $correct_answer = $number1 * $number2;
        break;
}

$options = [$correct_answer];
while (count($options) < 4) {
    $random_option = $correct_answer + rand(-$maxdiff, $maxdiff);
    if (!in_array($random_option, $options)) {
        $options[] = $random_option;
    }
}
shuffle($options);

$_SESSION['correct_answer'] = $correct_answer;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Math Quiz</title>
    <style>
        body {
            background-color: powderblue;
            justify-content: center;
            display: flex;
            padding: 10%;
        }
        h1 {color: blue;}
        h2 {color: blue;}
        p {color: black; font-size: 2em;}
        form {color: black; font-size: 1.3em; line-height: 1em;}
        .box1 {
            background-color: white;
            border-radius: 12px; 
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            padding: 20px;
            width: 50%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="box1">
    <div>
        <a href="index.php">Start Again</a><br><br>
        <a href="index.php">Close Quiz</a>
    </div>
    <div style="margin-right:220px;">
        <h1>Math Quiz</h1>
        <form method="post" action="answer.php">
            <p><?php echo "$number1 $operator $number2 = ?" ?></p>
            <input type="radio" name="ans" value="<?php echo $options[0]?>" required> A. <?php echo $options[0]?><br>
            <input type="radio" name="ans" value="<?php echo $options[1]?>" required> B. <?php echo $options[1]?><br>
            <input type="radio" name="ans" value="<?php echo $options[2]?>" required> C. <?php echo $options[2]?><br>
            <input type="radio" name="ans" value="<?php echo $options[3]?>" required> D. <?php echo $options[3]?><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
