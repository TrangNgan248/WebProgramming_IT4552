<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Comparison</title>
</head>

<body>
    <font size=5>Thank You: Got Your Input</font>
    <?php
    $firstname = $_POST['first'];
    $secondname = $_POST['second'];
    $average = ($grade1 + $grade2)/2;
    print("First = $first Second = $second<br>");
    if($first == $second) {
        print("$first and $second are equal");
    }
    if($first < $second) {
        print("$first is less than $second");
    }
    if($first > $second) {
        print("$first is greater than $second");
    }
    ?>
</body>

</html>