<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table class=\"table table-bordered text-center table-striped\"><tr><th>SURNAME</th><th>FIRSTNAME</th><th>EMAIL</th><th>PHONE</th><th>CITY</th><th>STATE</th></tr>";
$newUsers=file("https://ncode.amorce.org/customers.csv");
// var_dump($newUsers);

foreach($newUsers as $index => $user){
    // var_dump($user);   
    $userInfo= explode(",",$user);
    // var_dump($userInfo);    
    $surname=$userInfo[0];
    $firstName=$userInfo[1]; 
    $email=$userInfo[2];
    $phone=$userInfo[3];
    $city=$userInfo[4];
    $state=$userInfo[5];
    echo"<tr><td>$surname</td> <td>$firstName</td> <td>$email</td>  <td>$phone</td><td>$city</td> <td>$state</td></tr>";
};
echo "</table>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>