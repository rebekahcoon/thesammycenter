<?php

$events = array("Gala"=>"October 10, 2021","Giving Tree"=>"December 5th, 2021");






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
<section id="calendar" class="w3-container">
<div class="w3-row">
    
    <?php 
foreach($events as $event=>$event_value){
    echo '<div class="w3-half w3-card-4 w3-padding">

    <header class="w3-container w3-blue">
      <h1>'.$event.'</h1>
    </header>
    
    <div class="w3-container">
      <p>Lorem ipsum...</p>
    </div>
    
    <footer class="w3-container w3-blue">
      <h5>'.$event_value.'</h5>
    </footer>
    
    </div>';
}

?>
</div>

</section>

</body>
</html>