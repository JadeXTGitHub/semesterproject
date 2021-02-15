<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="default.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semster Project - DBU - STIM 3320</title>
</head>


<div class="bgimg">
  <div class="topleft">
    <p>DBU - STIM 3320</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p id="countdown" style="font-size:30px"></p>
    </div>
     <div class="bottomleft">
    <p>JENNNIFER THOMAS</p>
  </div>
</div>

<script>
    // Set the date
    var countDownDate = new Date("May 1, 2021 00:00:00").getTime();
    
    // Update the count down every 1 second
    var countdownfunction = setInterval(function() {
    
      // Get todays date and time
      var now = new Date().getTime();
      
      // Find the distance between now an the count down date
      var distance = countDownDate - now;
      
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
      // Output the result in an element with id="countdown"
      document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
      
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
    
    </body>
    </html>
    