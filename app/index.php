<!doctype html>

<!DOCTYPE html>
<html>
<head>
  <title>DJ Names</title>
  <meta name="description" content="DJ Names">
  <meta name="author" content="André MG Wisén">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- FAVICONS -->

  <!-- BOOSTRAP 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- CUSTOM -->
  <style>
  .progress {
    background-color: #fff;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
    tab1 { padding-left: 1em; }
    tab2 { padding-left: 3em; }
    tab3 { padding-left: 2em; }
    tab4 { padding-left: 16em; }
    tab5 { padding-left: 20em; }
    tab6 { padding-left: 24em; }
    tab7 { padding-left: 28em; }
    tab8 { padding-left: 32em; }
    tab9 { padding-left: 36em; }
    tab10 { padding-left: 40em; }
    tab11 { padding-left: 44em; }
    tab12 { padding-left: 48em; }
    tab13 { padding-left: 52em; }
    tab14 { padding-left: 56em; }
    tab15 { padding-left: 60em; }
    tab16 { padding-left: 64em; }

    @-webkit-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #fff; }
    }
    @-moz-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #fff; }
    }
    @keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #fff; }
    }
    .warning {
    -webkit-animation: argh-my-eyes 1s infinite;
    -moz-animation:    argh-my-eyes 1s infinite;
    animation:         argh-my-eyes 1s infinite;
    }

</style>
  </style>
</head>
<body>
  <div id="flash">

  <main role="main" class="container">
 <h1 class="mt-5">&nbsp;</h1>
 <h1 class="mt-5">&nbsp;</h1>
  <div class="row">
    <div class="col-sm-8 jumbotron">
      <b>Current</b><br><br>
      <h3 class="display-6">22:00-22:30</h3><br>
      <h1 class="display-3">Foo Bar & Lorem Ipsum</h1><br>

      <h3 class="display-6">5 min left</h3>
      <hr class="my-4">
      <p class="lead">
      Current Time:<tab1 id="currentTime"></tab1><br>
      Elapsed:<tab2 id="elapsedTime"></tab2><br>
      Remaining:<tab3 id="remainingTime"></tab3></ul><br>
      </p>
        <div class="progress" id="progressBar">
      </div>



    </div>
    <div class="col-sm-4 jumbotron bg-light">
      <div class="col">
        <b>Next</b><br><br>
        <h4>22:30 - 23:00</h4>
        <h2>Alice & Ipsum</h2><br>
        <p class="lead" id="motd">
        Get ready, your turn soon!
        </p>
    <hr class="my-4">

       <b>Upcomming</b><br><br>
       <div class="col">
        22:30 - 23:00&nbsp;&nbsp;&nbsp;&nbsp;Foo<br>
        23:00 - 23:30&nbsp;&nbsp;&nbsp;&nbsp;Bar<br>
        23:30 - 00:00&nbsp;&nbsp;&nbsp;&nbsp;Lorem<br>
        00:00 - 00:30&nbsp;&nbsp;&nbsp;&nbsp;Ipsum<br>
        00:30 - 01:00&nbsp;&nbsp;&nbsp;&nbsp;FuuBar<br>
      </div>


    </div>
  </div>
</div>

  </main>

<?php

$currentDate = "2019-10-21";
$currentTime = new DateTime($currentDate . "00:11:00");

function main($currentTime){
    /**
    * Main function
    *
    * @param object $currentTime 
    */

  echoTimes($currentTime,"currentTime");
  echoTimes(new DateTime("00:05:00"),"elapsedTime");
  echoTimes(new DateTime("00:20:00"),"remainingTime");

  $timeElapse = "1571576400";
  $timeTotal = "1771274120";
  echoProgress($timeElapse,$timeTotal);
}

function echoTimes($currentTime,$currentTimeId){
    /**
    * Echo current, elapsed, and remaining time.
    * Uses getElementById to write info
    *
    * @param object $currentTime 
    * @param object $currentTimeId
    */

  echo '<script>
  document.getElementById("' . $currentTimeId . '").innerHTML = "' . $currentTime->format("H:i") . '";
  </script>';
}

function echoProgress($timeElapse,$timeTotal){
    /**
    * Echo current process (based on time elapsed.
    */
    //echo $timeElapse;
    //echo $timeTotal;
    echo "<br>";

    $progressPercentage = round(100*intval($timeElapse)/intval($timeTotal));


    echo $progress;
    $progressPercentage = 70;

    if (("0" < $progressPercentage) && ($progressPercentage <= "40")){
      $progressClass = "progress-bar-striped progress-bar-animated";
      $motd = "You have plenty time left";
    } elseif (("40" < $progressPercentage) && ($progressPercentage <= "70")){
      $progressClass = "bg-warning progress-bar-striped progress-bar-animated";
      $motd = "Get ready, your turn soon!";
     } elseif (("70" < $progressPercentage) && ($progressPercentage <= "90")){
      $progressClass = "bg-danger progress-bar-striped progress-bar-animated";
      $motd = "Go upstaris and get ready for your turn!";
    } elseif (("90" < $progressPercentage) && ($progressPercentage <= "100")){
      $progressClass = "bg-danger ";
      $motd = "You're time begins now!";
      echo '<script> var element = document.getElementById("flash");element.classList.toggle("warning");</script>';

    }


 
    $progressBar = '<div class=\"progress-bar ' . $progressClass . '\" role=\"progressbar\" style=\"width: ' . $progressPercentage . '%\" aria-valuenow=\"' . $progressPercentage . '\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>';


    echo '<script>document.getElementById("progressBar").innerHTML = "' . $progressBar . '" ;</script>';
    
    echo '<script>document.getElementById("motd").innerHTML = "' . $motd . '" ;</script>';




}


main($currentTime);

/*

// php -S localhost:9000


$row = 1;
$djs = array();
if (($handle = fopen("times.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    //$currentTime = new DateTime('2019-10-18');
    //$currentTime->setTime(14, 55, 24);


    $currentDate = "2019-10-20";



  	$name = $data[0];
    $currentHour = substr($data[1],0,2);

  

    $openingHour = "22";
    $closingHour = "03";

    if (is_numeric($currentHour) !== True) {
       continue;
    }

    if ($currentHour < $closingHour){
      $currentDate = date('Y-m-d', strtotime($currentDate . ' + 1 days'));
    }



    $start = strtotime($currentDate . " " . $data[1] . ":00");
    $end = strtotime($currentDate . " " . $data[2] . ":00");

  	//array_push($names,array($name,$data[1],$start,$data[2],$end));
    array_push($djs,$array = array(
      "name" => $name,
      "startTime" => $data[1],
      "startTimeUnix" => $start,
      "endTime" => $data[2],
      "endTimeUnix" => $end,
      )
    );



  }
  fclose($handle);
}



$currentDate = "2019-10-21";
//$currentTime = new DateTime("now", new DateTimeZone('Europe/Stockholm') );

$currentTime = new DateTime($currentDate . "00:25:00");


$openingTime = new DateTime($currentDate . "22:00:00");
$closingTime = new DateTime($currentDate . "02:45:00");

$currentTimeUnix = $currentTime->getTimestamp();


// DEV
echo "CURRENT TIME: " . $currentTime->format("H:i");
echo "<br>";
echo "CURRENT UNIX: " . $currentTimeUnix;
echo "<br>"."<br>";
// DEV

$djFound = false;
$djsRemain = array();

foreach($djs as $dj) {
    // echo $name[1], '<br>'; // NAMES
    //echo "DJ: " . $dj["startTimeUnix"], '<br>';
    //echo "CURRENT: " . $currentCompare, '<br>';
    if ($dj["endTimeUnix"]<$currentTimeUnix){
      continue;
    }
    //echo "OK";

    if ($djFound == false){
      $timeElapse =  intval($currentTimeUnix) - intval($dj["startTimeUnix"]);
      $timeRemain = intval($dj["endTimeUnix"]) - intval($currentTimeUnix);
      $timeTotal = $timeElapse + $timeRemain;

      echo "timeElapsed: " . date("H:i",$timeElapse);
      echo "<br>";
      echo "timeRemaining: " . date("H:i",$timeRemain);
      echo "<br>";
      echo "TOTAL TIME: " . date("H:i",$timeTotal);
      echo "<br>";
      echo '<progress id="djTime" max="' .  $timeTotal . '" value="' . $timeElapse . '"></progress>';
      
      echo "<br>";
      echo "<br>";

      echo $dj["name"] . ": ".$dj["startTime"] . " - " . $dj["endTime"] . '<br>';

      

      $djFound = true;

    } else {
        array_push($djsRemain,$dj);
    }
}

foreach($djsRemain as $dj){
  echo "";
  // echo $dj["name"] .  '<br>';
}

*/
?>

  <!-- CDNs -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>





