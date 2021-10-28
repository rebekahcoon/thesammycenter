<?php

$events = array("Gala"=>"October 10, 2021","Giving Tree"=>"December 5th, 2021","Fundraiser"=>"December 23, 2021","New Year's Fun"=>"January 1, 2022");






?>






<!DOCTYPE html>
<html>

<head>
    <title>The Sammy Center</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../style/rstyle.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>

<body>
<section id="calendar" class="w3-container">
<div class="w3-row-padding">
    
    <?php 
foreach($events as $event=>$event_value){
    echo '<div class="w3-col m12 l5 w3-margin w3-padding w3-border-black  w3-leftbar ">

    <header class="w3-container test monText">
      <h3>'.$event.'<span class="w3-right w3-medium">'.$event_value.'</span></h3>
    </header>
    
    <div class="w3-container">
      <p>Lorem ipsum...</p>
    </div>
    
    <footer class="w3-container test">
      <h5><a href="">Join Event</a></h5>
    </footer>
    
    </div>';
}

?>
</div>

</section>

</body>
</html>