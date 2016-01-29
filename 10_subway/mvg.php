<?php
$min_time_to_departure = 60;
$api_key = "5af1beca494712ed38d313714d4caff6";


// Build Http query using params
// $query = http_build_query($params);

// Create Http context details
$contextData = array (
                'method' => 'GET',
                'header' => "Connection: close\r\n".
                            "X-MVG-Authorization-Key : ". $api_key ."\r\n" );
                // 'content'=> $query );

// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));

// Read page rendered as result of your POST request

function get_deps_for_station_id($id)
{
    global $context;
    $result =  file_get_contents (
                      'https://www.mvg.de/fahrinfo/api/departure/'. $id .'?footway=0',  // page url
                      false,
                      $context);
    return json_decode($result, true)['departures'];
}

function get_first_for_dest($deps, $dest, $line)
{
    global $min_time_to_departure;
    for ($i=0; $i < count($deps); $i++) {
      // echo $i;
      $d = $deps[$i];
      if (in_array($d['destination'], $dest) && $d['departureTime'] / 1000 - time() > $min_time_to_departure && $d['label'] == $line ) {
          return $deps[$i];
      }
    }
}

?>
