<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="first">
        <select name="mark" id="">
            <option value="+">+</option>
            <option value="-">-</option>
        </select>
        <input type="number" name="second">
        <button type="submit" name="submit">calculate</button>
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $second = $_POST['second'];
    $mark = $_POST['mark'];
    if ($mark == '+') {
        $total = $first + $second;
        echo $total;
    } else {
        $total = $first - $second;
        echo $total;
    }
}
?>