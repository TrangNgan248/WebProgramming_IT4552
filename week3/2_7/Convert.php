<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert radians to degrees</title>
</head>
<body>
    <form action="" method="POST">
        Chọn đơn vị:
        <?php
            print("<input type=\"radio\" name=\"pick\" value=\"radians\"> Radian");
            print("<input type=\"radio\" name=\"pick\" value=\"degrees\"> Degree");
            print("<br>");
        ?>
        <br> Nhập dữ liệu:
        <input type="text" name="data"> <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">       
    </form>

    <?php
    function convert($data, $unit){
        if($unit == 'radians') {
            $data = $data/3.14*180;
            print(" $data degrees");
        } elseif($unit == 'degrees') {
            $data = $data*3.14/180;
            print(" $data radians");
        }
    }
    $input = $_POST["pick"];
    $data = $_POST["data"];
    print("$data $input = ");
    convert($data, $input);
    ?>
</body>
</html>