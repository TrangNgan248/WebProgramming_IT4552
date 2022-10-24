<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <form action="whileloop.php" method="post">    
    <?php
        print("Select Start Number: ");
        print("<select name=\"start\">");
            for($i = 0; $i<10; $i++) {
                print("<option>$i</option>");
            }
        print("</select>");
        print("<br> End Number: ");
        print("<select name=\"end\">");
            for($i = 10; $i<20; $i++) {
                print("<option>$i</option>");
            }
        print("</select>");   
    ?>
    <br> <input type="submit" value="Submit">
    </form> 
</body>
</html>