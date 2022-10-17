<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiving Input</title>
</head>

<body>
    <font size=5>Thank You: Got Your Input</font>
    <?php
    $email = $_GET['email'];
    $contact = $_GET['contact'];
    print("<br> Your email address is: $email");
    print("<br> Contact preference is: $contact");
    ?>
</body>

</html>