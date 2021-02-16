<?php

    //OOP
    include 'Connector.php';

    $connect = new Connector();// Create an Instnce of Connector
    if(!$connect) {
        //If the Connctor Returns False...
        echo 'Unable to Connect';
    } else {
        echo 'Connected Successfully';
    }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngonyoku Website</title>
</head>
<body>
    <h1>NGONYOKU WEBSITE</h1>
    <form action="index.php" action="GET">
        <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your First Name">
        </div>
        <br>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your Last Name">
        </div>
    </form>
</body>
</html>