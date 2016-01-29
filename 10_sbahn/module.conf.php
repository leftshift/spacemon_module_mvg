<?php
$moduleconfig["name"]["de"] = "S-Bahn";
$moduleconfig["name"]["en"] = "Metro";
$moduleconfig["icon"] = "train";
$moduleconfig["refresh"] = "10";
if (@$css == "lcars.css") {
	$moduleconfig["name"]["de"] = "Teleporter";
	$moduleconfig["name"]["en"] = "Teleporter";
}
//$moduleconfig["dev"] = true;

$moduleconfig["stationid"] = "1310";
$moduleconfig["line"]["0"]["num"] = 7;
$moduleconfig["line"]["0"]["dests"] = array("Mittersendling", "Harras", "Heimeranplatz", "Donnersbergerbrücke", "Hackerbrücke", "Hauptbahnhof", "München Hbf Gl.27-36", "Karlsplatz-Stachus", "Marienplatz", "Isartor", "Rosenheimer Platz", "Ostbahnhof", "München Ost", "St.-Martin-Straße", "Giesing", "Perlach", "Neuperlach Süd", "Neubiberg", "Ottobrunn", "Hohenbrunn", "Wächterhof", "Höhenkirchen-Siegertsbrunn", "Dürrnhaar", "Aying", "Peiß", "Großhelfendorf", "Kreuzstraße");
$moduleconfig["line"]["1"]["num"] = 20;
$moduleconfig["line"]["1"]["dests"] = array("Mittersendling", "Pasing");
