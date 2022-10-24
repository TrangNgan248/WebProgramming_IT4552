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
    $grade1 = $_POST['grade1'];
    $grade2 = $_POST['grade2'];
    $average = ($grade1 + $grade2)/2;
    print("<br> Average score: $average");
    if($average > 89) {
        print("<br> You got A!");
    } else {
        print("<br> You don't got A!");
    }

    $max = $grade1;
    if($grade1 < $grade2) {
        $max = $grade2;
    }
    print("<br> Your max score was: $max");
    ?>
</body>

</html>