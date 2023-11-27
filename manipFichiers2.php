<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$newUsers=file("https://ncode.amorce.org/customers.csv");
// var_dump($newUsers);
foreach($newUsers as $index => $user){
    // var_dump($user);
    $userInfo= explode(",",$user);
    $userInfo[0]=$surname;
    $userInfo[1]=$firstName; 
    $userInfo[2]=$email;
    $userInfo[3]=$city;
    $userInfo[4]=$state;
    echo"<tr><td>$surname</td> <td>$firstName</td> <td>$email</td> <td>$city</td> <td>$state</td></tr>";
};
    ?>
</body>
</html>