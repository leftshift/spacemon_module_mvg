<?php
include "mvg.php";
include "module.conf.php";
$abfahrten_s = get_deps_for_station_id($moduleconfig["stationid"]);



$lines = $moduleconfig["line"];

foreach ($lines as $line) {
	$dest = get_first_for_dest($abfahrten_s, $line["dests"], $line["num"]);
	if ($dest == "") {
	    $next = "--";
	} else {
	    $next_secs = $dest['departureTime'] / 1000 - time();
	    $next = round($next_secs / 60);
	    $next .= " min";
	    

	}
	echo "<li class=\"fa\"><span class=\"subwaynum\">S" . $line["num"] . "</span></li><li class=\"fa\"><span>$next</span></li>";

}




?>

