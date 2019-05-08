 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="refresh" content="60">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
     
   </head>
   <body>

   <?php
   
date_default_timezone_set("Europe/Amsterdam");
$time = '20:01:03';
$morning = "Good morning! ". date("H:i ")."<br>". " Today its " .date("d/m/Y");
$evening = "Good evening! ". date("H:i ")."<br>". " Today its " .date("d/m/Y");
$afternoon = "Good afternoon! ". date("H:i ")."<br>". " Today its " .date("d/m/Y");
$night = "Good night! ". date("H:i "). "<br>"." Today its " .date("d/m/Y");

if ($time >= 6 && $time <12) {
  echo "<h1>$morning</h1>";
  echo '<body class = "morning">';
  $day = $morning;
}
elseif ($time >= 12 && $time < 18) {
  echo "<h1>$afternoon</h1>";
  echo '<body class = "evening">';
  $day = $afternoon;
}

elseif ($time >= 18 && $time < 24) {
  echo "<h1>$evening</h1>";
  echo '<body class = "afternoon">';
  $day = $evening;
}

elseif ($time >= 24 && $time < 6) {
  echo "<h1>$night</h1>";
  echo '<body class = "night">';
  $day = $night;
}

// echo "Have a ".$day." Chris"


 ?>
   </body>
 </html>
