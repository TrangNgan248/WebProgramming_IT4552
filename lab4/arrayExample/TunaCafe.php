<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuna Cafe</title>
</head>
<body>
    <font size = 4 color="blue">Tuna Cafe Results Received</font>
    <?php
        $prefer = $_POST["prefer"];
        $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
        if (count($prefer) == 0) {
            print "Oh no! Please pick sth as your favorite!";
        } else {
            print "<br> Your selections were <ul>";
            foreach ($prefer as $item) {
                print "<li>$menu[$item]</li>";
            }
            print '</ul>';
        }
    ?>
</body>
</html>