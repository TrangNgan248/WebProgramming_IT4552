<html>
<?php
$username = $_POST['username'];
$age = $_POST['age'];
$email = $_POST['email'];
$hobbies = $_POST['hobby'] ;
$phone = $_POST['phone'];
$dob = $_POST['dob'];

print("Hello, $username. <br>
You are $age years old. <br>
Your email is: $email <br>
Your phone number is: $phone <br>
Your dob is: $dob <br>");
print("Your hobbies are: ");
foreach($hobbies as $hobby) {
    $count = 1;
    print("$count. $hobby\n");   
    $count++;
}
?>
</html>
