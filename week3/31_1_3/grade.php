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
    if($average > 8.9) {
        print("<br> You got A!");
    } elseif($average > 7.9) {
        print("<br> You got B!");
    } elseif ($average > 6.9) {
        print("<br> You got C!");
    } elseif ($average > 5.9) {
        print("<br> You got D!");
    } elseif ($average >= 0) {
        print("<br> You got F!");
    } else {
        print("Illegal average less than 0 average = $average");
    }

    $max = $grade1;
    if($grade1 < $grade2) {
        $max = $grade2;
    }
    print("<br> Your max score was: $max");
    ?>
</body>

</html>