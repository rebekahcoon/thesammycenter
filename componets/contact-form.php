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
  <link rel="stylesheet" href="../style/main.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" />
  <link rel="stylesheet" href="../style/rstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="../src/main.js" defer></script>

</head>

<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="
            w3-bar-item
            w3-button
            w3-hover-black
            w3-hide-medium
            w3-hide-large
            w3-right
          " href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button">HOME</a>
      <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> BOARD</a>
      <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
        <i class="fa fa-search"></i>
      </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
      <a href="#" class="w3-bar-item w3-button">SEARCH</a>
    </div>
  </div>

  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space: nowrap">
      <span class="
            w3-center
            w3-padding-large
            w3-black
            w3-xlarge
            w3-wide
            w3-animate-opacity
          ">THANK YOU

    </div>
  </div>


  <div class="w3-container w3-section">
    <ul>
      <li><?php echo $fName ?></li>
      <li><?php echo $lName ?></li>
      <li><?php echo $email ?></li>
      <li><?php echo $message ?></li>
      <?php

      $ahelp = $_POST["help"];
      $n = count($ahelp);


      for ($i = 0; $i < $n; $i++) {
        echo "<li>" . $ahelp[$i] . "</li>";
      }

      ?>
    </ul>
  </div>

  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {
      myFunction();
    };

    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
      ) {
        navbar.className =
          "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(
          " w3-card w3-animate-top w3-white",
          ""
        );
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
</body>

</html>