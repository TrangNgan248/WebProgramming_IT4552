<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time</title>
</head>

<body>
    <form action="" method="POST">
        Enter name of P1:
        <input type="text" name="name1"> <br>
        Choose date of birth of P1:
        <input type="date" name="dob1"> <br>
        Enter name of P2:
        <input type="text" name="name2"> <br>
        Choose date of birth of P2:
        <input type="date" name="dob2"> <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    $name1 = $_POST["name1"];
    $name2 = $_POST["name2"];
    $date1 = $_POST["dob1"];
    $date2 = $_POST["dob2"];
    print("$name1's birthday is: ");
    echo date("D, M d, o", strtotime($date1));
    print("<br>");
    print("$name2's birthday is: ");
    echo date("D, M d, o", strtotime($date2));
    print("<br>");

    print("Difference in days between two days are: ");
    $diff = abs(strtotime($date2) - strtotime($date1));
    echo round($diff / (60 * 60 * 24));
    print(" days <br>");

    function calcutateAge($dob1, $dob2)
    {
        $dob1 = date("Y-m-d", strtotime($dob1));
        $dob2 = date("Y-m-d", strtotime($dob2));
        $dob1Object = new DateTime($dob1);
        $dob2Object = new DateTime($dob2);


        $diff = $dob1Object->diff($dob2Object);

        return $diff->y;
    }
    $now = date("Y-m-d");
    $age1 = calcutateAge($date1, $now);
    $age2 = calcutateAge($date2, $now);
    print("$name1 is $age1 years old <br>");
    print("$name2 is $age2 years old <br>");

    $yDiff = calcutateAge($date1, $date2);
    print("Difference years between $name1 and $name2 are $yDiff years old.");
    ?>
</body>

</html>