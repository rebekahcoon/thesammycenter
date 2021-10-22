<?php
// define variables and set to empty values
$fName = $lName = $email = $message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = test_input($_POST["fName"]);
    $lName = test_input($_POST["lName"]);
    $email = test_input($_POST["Email"]);
    $message = test_input($_POST["Message"]);
    
}   
    


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>


<!DOCTYPE html>
<html>

<head>
    <title>Thank you</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
    
    <div class="w3-container">
        <ul>
            <li><?php echo $fName ?></li>
            <li><?php echo $lName ?></li>
            <li><?php echo $email ?></li>
            <li><?php echo $message ?></li>
            <?php

            $ahelp = $_POST["help"];
            $n = count($ahelp);

            
            for($i=0; $i<$n; $i++){
                echo "<li>".$ahelp[$i]."</li>";
            }
            
            ?>
        </ul>
    </div>


</body>

</html>