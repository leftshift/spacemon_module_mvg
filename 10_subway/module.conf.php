<?php
$moduleconfig["name"]["de"] = "U-Bahn";
$moduleconfig["name"]["en"] = "Subway";
$moduleconfig["icon"] = "subway";
$moduleconfig["refresh"] = "10";
if (@$css == "lcars.css") {
	$moduleconfig["name"]["de"] = "Turbolift";
	$moduleconfig["name"]["en"] = "Turbolift";
}
//$moduleconfig["dev"] = true;

$moduleconfig["stationid"] = "1450";
$moduleconfig["line"]["0"]["num"] = 3;
$moduleconfig["line"]["0"]["dests"] = array("Moosach","Olympia-Einkaufszentrum", "Scheidplatz");
