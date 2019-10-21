<?php
$page = $_SERVER['PHP_SELF'] . $_SERVER['REQUEST_URI'];
$page =$_SERVER['REQUEST_URI'];

$sec = "10";
?>

<!DOCTYPE html>
<html>
<head>
  <title>DJ Names</title>
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <meta name="description" content="DJ Names">
  <meta name="author" content="André MG Wisén">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- FAVICONS -->

  <!-- BOOSTRAP 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- CUSTOM -->
  <style>
  .footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 60px; /* Set the fixed height of the footer here */
    line-height: 60px; /* Vertically center the text there */
    background-color: #f5f5f5;
  }
  .progress {
    background-color: #fff;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
    tab1 { padding-left: 1em; }
    tab2 { padding-left: 3em; }
    tab3 { padding-left: 2em; }
    tab4 { padding-left: 1em; }
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

    /* Flashing progress bar */

    @-webkit-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #dc3545; }
    99% { background-color: #dc3545; }
    100% { background-color: #fff; }
    }
    @-moz-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #dc3545; }
    99% { background-color: #dc3545; }
    100% { background-color: #fff; }
    }
    @keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #dc3545; }
    99% { background-color: #dc3545; }
    100% { background-color: #fff; }
    }
    .warning {
      -webkit-animation: argh-my-eyes 1s infinite;
      -moz-animation:    argh-my-eyes 1s infinite;
      animation:         argh-my-eyes 1s infinite;
    }

    body {
      padding-top: 1rem;
    }
    @media (max-width: 980px) {
      body {
        padding-top: 0;
        padding-bottom: 50px;
      }
    }

    /* Primary text */
    h1 {
      /* Time span, e.g. 20:00 - 21:00; */
      font-weight: bold;
      font-size: 1.75rem;
    }
    h2 {
      /* DJ Name(s) */
      font-weight: bold;
      font-size: 6rem;
    }
    h3 {
      /* Minutes left */
      font-weight: bold;
      font-size: 1.75rem;
    }

    /* Secondary text */
    h4 {
      /* Time span, e.g. 20:00 - 21:00; */
      font-size: 1.75rem;
    }
    h5 {
      /* DJ Name(s) */
      font-size: 4rem;
    }
    h6 {
      /* MOTD */
      font-size: 1.75rem;
    }

    .container{
      max-width: 95%; 
    }
  </style>
</head>
<body>

  <main role="main" class="container">
    <div class="row">

      <!-- MAIN JUMBOTRON -->
      <div class="col-sm-8 jumbotron">
        <!-- UPPER PART -->
        <div class="badge badge-primary text-wrap" style="width: 6rem;">
            <b>CURRENT</b>
        </div>
        
        <!-- REMOVE SPACE, USE CSS -->
        <br><br>
        <!-- REMOVE SPACE, USE CSS -->

        <!--
        See: https://getbootstrap.com/docs/4.0/content/typography/
        -->

        <h1 id="timeSpanMain">00:00 - 00:00</h1>
        <h2 id="currentDJ">Current DJ Name</h1>
        <h3 id="timeLeftMinutes">X min left</h1>
        
        <hr class="my-4"> 

        <!-- LOWER PART -->
        <p class="lead">
          Current Time:<tab1 id="currentTime">00:00</tab1><br>
          Elapsed:<tab2 id="elapsedTime">00:00</tab2><br>
          Remaining:<tab3 id="remainingTime">00:00</tab3></ul><br>
        </p>
        <div class="progress" id="progressBar">
        </div>
      </div>

      <!-- SECONDARY JUMBOTRON -->
      <div class="col-sm-4 jumbotron bg-light">
        <!-- UPPER PART -->
        <div class="col">
          <div class="badge badge-info text-wrap" style="width: 6rem;">
            <b>NEXT</b>
          </div>

          <!-- REMOVE SPACE, USE CSS -->
          <br><br>
          <!-- REMOVE SPACE, USE CSS -->

          <h4 id="timeSpanSecondary">00:00 - 00:00</h4>
          <h5 id="nextDJ">Next DJ Name</h5><br>
          <h6 class="lead" id="motd"></h6>
          </p>

          <!-- LOWER PART -->
          <hr class="my-4">
          
          <div class="badge badge-secondary text-wrap" style="width: 6rem;">
            <b>UPCOMING</b>
          </div>

          <!-- REMOVE SPACE, USE CSS -->
          <br><br>
          <!-- REMOVE SPACE, USE CSS -->

          <div class="col" id="upcomingDJs"></div>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <span class="text-muted"><b>Message from Members: </b>Don't forget to have fun <3</span>
    </div>
  </footer>

  <!-- DEV -->

  <!--
  DEV TIME TOOLS
  <form>
    Time: <input type="time" name="time"><br>
    Past midnight: <input type="checkbox" name="midnight"><br>
    <br><input type="submit"> 
  </form>
  -->

  <!-- DEV -->

<?php
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

function echoProgress($timeElapse,$timeTotal,$echoMOTD){
  /**
  * Echo current process (based on time elapsed.
  */
  $progressPercentage = round(100*intval($timeElapse)/intval($timeTotal));

  if ($progressPercentage == 0.0) {
    $progressPercentage = 0;
  }

  if ($progressPercentage < 0) {
    $progressPercentage = $progressPercentage * -1;
  }

  //DEV
  // $progressPercentage = 70;
  // DEV

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
    $progressClass = "bg-danger";
    $progressClass = "warning";
    $motd = "Your time begins now!!!";
    //echo '<script> var element = document.getElementById("flash");element.classList.toggle("warning");</script>';
  }

  $progressBar = '<div class=\"progress-bar ' . $progressClass . '\" role=\"progressbar\" style=\"width: ' . $progressPercentage . '%\" aria-valuenow=\"' . $progressPercentage . '\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>';

  echo '<script>document.getElementById("progressBar").innerHTML = "' . $progressBar . '" ;</script>';
  if ($echoMOTD==true){
    echo '<script>document.getElementById("motd").innerHTML = "' . $motd . '" ;</script>';
  }
}

function getDJs(){
  /**
  * Reads CSV-fils
  * @return array Array with each DJ
  *
  * Each line contains the name of the DJ, the start time, and the end time.
  * 
  * Example:
  *   Name,Start,End
  *   Foo,22:00,22:30
  *   Bar,22:30,23:00
  *   Lorem,23:00,23:30
  *   Ipsum,23:30,00:00
  *   Alice,00:00,00:30
  *   Bob,00:30,01:00
  * 
  * N.B. Assumes the event is <24h
  * Uses COMMA as a seperator

  */

  $djs = array();
  $filePath = "times.csv";
  global $currentDate;
  $currentDateORG = $currentDate;


  if (($handle = fopen($filePath, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

      // DEV
      $currentDate = $currentDateORG;
      $openingHour = "22";
      $closingHour = "03";
      // DEV


      $currentStartHour = substr($data[1],0,2);
      $currentEndHour = substr($data[2],0,2);

      // First line is a header
      if (is_numeric($currentStartHour) !== True) {
        continue;
      }

      // Converts time to UNIX timestamps based on the current date
      // $start = strtotime($currentDate . " " . $data[1] . ":00");
      $start = new dateTime($currentDate . " " . $data[1] . ":00");
      $start = $start->getTimestamp();


      // Check if date is past midnight
      if ($currentStartHour < $closingHour){
        $currentDate = date('Y-m-d', strtotime($currentDate . ' + 1 days'));
      } elseif ($currentEndHour < $closingHour){
        $currentDate = date('Y-m-d', strtotime($currentDate . ' + 1 days'));
      }


      // Converts time to UNIX timestamps based on the current date
    
      //$end = strtotime($currentDate . " " . $data[2] . ":00");
      $end = new dateTime($currentDate . " " . $data[2] . ":00");
      $end = $end->getTimestamp();

      // Each item is a different DJ
      array_push($djs,
        $array = array(
          "name" => $data[0],
          "date" => $currentDate,
          "startTime" => $data[1],
          "startTimeUnix" => $start,
          "endTime" => $data[2],
          "endTimeUnix" => $end,
        )
      );
    }
    fclose($handle);
    return $djs;
  }

}

function getActiveDJs($djs){
  /**
  * Goes trought all avaible DJs.
  * Filters out DJs, based on the current time.
  *
  * @return array Current DJ, Next DJ, and Upcoming DJ(s)
  */


  global $currentTime;

  $currentDJ_bool = false;
  $nextDJ_bool = false;
  $upcomningDJ_bool = false;
  
  $currentDJ = array();
  $nextDJ = array();
  $upcomningDJs = array();


  $currentTimeUnix = $currentTime->getTimestamp();
  // If error occures, change timezone 
  // $currentTimeUnix->setTimezone(new DateTimeZone('Europe/Stockholm'));

  foreach($djs as $dj) {

    /* === DEV ===
    if (($currentDJ_bool == true) && ($dj["startTimeUnix"]>$currentTimeUnix)){
      $currentDJ_bool = true;
      $dj["name"] = "VENUE NOT OPEN";
      $dj["startTime"] = "00:00";
      $dj["endTime"] = "00:00";
      $currentDJ = $dj;
    }
    */

    if ($dj["endTimeUnix"]<$currentTimeUnix){
      continue;
    }

    /* WRONG!? - Should be ok now???
    if ($dj["endTimeUnix"]<$currentTimeUnix){
      continue;
    }
    */

    if ($currentDJ_bool == false){
      $currentDJ_bool = true;

      // This might be wrong...
      // Errors might occure if it's around midnight


      //echo $currentTime->format('U');


      $timeElapse =  intval($currentTimeUnix) - intval($dj["startTimeUnix"]);
      $timeRemain = intval($dj["endTimeUnix"]) - intval($currentTimeUnix);

      $timeRemainMinutes = new DateTime();
      $timeRemainMinutes->setTimestamp($timeRemain);
      $timeRemainMinutes = $timeRemainMinutes->format("i");
      if (substr($timeRemainMinutes,0,1) == "0"){
        $timeRemainMinutes = substr($timeRemainMinutes,1,2);
      }

      $timeTotal = $timeElapse + $timeRemain;
      
      // Append times
      $dj["timeElapse"] = $timeElapse;
      $dj["timeRemain"] = $timeRemain;
      $dj["timeRemainMinutes"] = $timeRemainMinutes;
      $dj["timeTotal"] = $timeTotal;

      $currentDJ = $dj;

    } elseif ($nextDJ_bool == false){
      $nextDJ_bool = true;
      $nextDJ = $dj;
    } else {
      array_push($upcomningDJs,$dj);
    }
  }

  $activeDjs =  array(
          "currentDJ" => $currentDJ,
          "nextDJ" => $nextDJ,
          "upcomingDJs" => $upcomningDJs,
        );

  return $activeDjs;

}

function formatUnixInteger($unixTime){

  $time = gmdate("H:i", $unixTime);
  return $time;
}

function echoTimeSpan($start,$end,$timeSpanId){
  /**
  * Echo current, elapsed, and remaining time.
  * Uses getElementById to write info
  *
  * @param object $currentTime 
  * @param object $currentTimeId
  */

  echo '<script>document.getElementById("' . $timeSpanId . '").innerHTML = "' . $start . ' - ' . $end . '" ;</script>';
}

function main($currentTime){
  /**
  * Main function
  *
  * @param object $currentTime 
  */ 


  $djs = getDJs(); // All DJs
  $activeDJs = getActiveDJs($djs); // Active DJs, based on the current time

  $currentDJ = $activeDJs["currentDJ"];
  $nextDJ = $activeDJs["nextDJ"];
  $upcomingDJs = $activeDJs["upcomingDJs"];

  // Check if there's no more DJs left
  if ($nextDJ["name"]==null){
    $nextDJ["name"] = "";
    $echoMOTD=false;
  } else {
    echoTimeSpan($nextDJ["startTime"],$nextDJ["endTime"],"timeSpanSecondary");
    $echoMOTD=true;
  }
  
  // Displays time info
  $timeElapseUnix = $currentDJ["timeElapse"]; // INT
  $timeRemainUnix = $currentDJ["timeRemain"]; // INT
  $timeTotalUnix = $currentDJ["timeTotal"];
  
  $timeElapse = formatUnixInteger($timeElapseUnix);
  $timeRemain = formatUnixInteger($timeRemainUnix);

  echoTimes($currentTime,"currentTime");
  echoTimes(new DateTime($timeElapse.":00"),"elapsedTime");
  echoTimes(new DateTime($timeRemain.":00"),"remainingTime");
  echoTimeSpan($currentDJ["startTime"],$currentDJ["endTime"],"timeSpanMain");
  
  // Displays current time progress
  echoProgress($timeElapseUnix,$timeTotalUnix,$echoMOTD);

  // Displays how many minutes remain
  echo '<script>document.getElementById("timeLeftMinutes").innerHTML = "' . $currentDJ["timeRemainMinutes"] . ' min left" ;</script>';

  // Displays current and next DJ names
  echo '<script>document.getElementById("currentDJ").innerHTML = "' . $currentDJ["name"] . '" ;</script>';
  echo '<script>document.getElementById("nextDJ").innerHTML = "' . $nextDJ["name"] . '" ;</script>';

  // Displays upcoming DJ names
  $text = "";
  $i=0;
  $displayLimit = "5";
  foreach($upcomingDJs as $dj){
    if ($i<$displayLimit){
        $text = $text . $dj["startTime"] . " - " . $dj["endTime"] . "<tab4>" . $dj["name"] . "</tab4><br>";
        $i++;
    } else {
      $text = $text . "...";
      break;
    }
  }

  // Displays upcoming DJ names
  echo '<script>document.getElementById("upcomingDJs").innerHTML = "' . $text . '" ;</script>';

}



// Set timezone
date_default_timezone_set('Europe/Stockholm');
// Set dev date
// $currentDate = "2019-10-21";

$currentDate = new DateTime("now");
$currentDate = $currentDate->format("Y-m-d");

// E.g. ?time=01%3A22&midnight=on
if(!empty($_GET)){
  $devTime = $_GET["time"];

  if ($_GET['midnight'] == 'on'){
    $nextDay = date('Y-m-d', strtotime($currentDate . ' + 1 days'));
    $currentTime = new DateTime($nextDay . $_GET["time"].":00");
  } else {
    $currentTime = new DateTime($currentDate . $_GET["time"].":00");
  }
} else {
  $currentTime = new DateTime("now");
}


/* === DEV ===
echo "<br>";
echo "CURRENT TIME: ".$currentTime->format("H:i"). "<br>";
echo "CURRENT DATE: ".$currentTime->format("Y-m-d"). "<br>";
*/

main($currentTime); // Friendly reminder: php -S localhost:9000

?>

    <!-- CDNs -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>





