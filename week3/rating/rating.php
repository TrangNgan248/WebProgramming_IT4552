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
   $rate = $_POST['rate'];
   switch($rate) {
       case "3":
            print("<br>The rating was good");
            break;
       case "2":
            print("<br>The rating was normal");
            break;
       case "1":
            print("<br>The rating was bad");
            break;
       default:
            print("<br>Error: that rating does not exist");
            break;
   }
    ?>
</body>

</html>