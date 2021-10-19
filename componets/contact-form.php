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
    <title>The Sammy Center</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">GET INVOLVED!</h3>
        <p class="w3-center"><em>We'd love your help or insight!</em></p>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
                <iframe width="300" height="300" style="border:0" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJWc0_PddjUocRJUIzKHu13FY&key=AIzaSyC_MgsYzuFy5HUxE6WDZU1bxTIZszKaads"></iframe>
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-padding">
                    <i class="
                fa fa-map-marker fa-fw
                w3-hover-text-black w3-xlarge w3-margin-right
              "></i>
                    Salt Lake City, UT<br />
                    <i class="
                fa fa-phone fa-fw
                w3-hover-text-black w3-xlarge w3-margin-right
              "></i>
                    Phone: +00 151515<br />
                    <i class="
                fa fa-envelope fa-fw
                w3-hover-text-black w3-xlarge w3-margin-right
              "></i>
                    Email: mail@mail.com<br />
                </div>


                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="w3-row w3-padding">
                        <div class="w3-half w3-padding-small">

                            <input class="w3-input" type="text" placeholder="First Name" required name="fName" />
                        </div>
                        <div class="w3-half w3-padding-small">
                            <input class="w3-input" type="text" placeholder="Last Name" required name="lName" />
                        </div>
                    </div>
                    <div class="w3-row w3-padding">
                        <div class="w3-col w3-padding-small">
                            <input class="w3-input" type="email" placeholder="Email" required name="Email" />
                        </div>
                    </div>
                    <div class="w3-row w3-padding">
                        <div class="w3-col w3-padding-small">
                            <textarea class="w3-input" type="text" placeholder="Message" required
                                name="Message"></textarea>
                        </div>
                    </div>
                    <div class="w3-row-padding">
                        <h3>How would you like to help?</h3>
                        <input class="w3-check" name="help[]" type="checkbox" value="volunteer">
                        <label>Volunteer</label>
                        <input class="w3-check" type="checkbox" name="help[]" value="donate">
                        <label>Donate</label>
                        <input class="w3-check" type="checkbox" name="help[]" value="Request more info">
                        <label>Request more information</label>
                    </div>
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </div>
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