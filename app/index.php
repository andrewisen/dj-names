<!doctype html>

<!DOCTYPE html>
<html>
<head>
  <title>DJ Requests</title>
  <meta name="description" content="DJ Names">
  <meta name="author" content="André MG Wisén">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- FAVICONS -->

  <!-- BOOSTRAP 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- CUSTOM -->
</head> 
<body>
<?php
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


  	/*
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
   
    }
     */
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

?>

  <!-- CDNs -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>





