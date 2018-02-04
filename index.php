<?php
require("vendor/autoload.php");

use UptimeRobot\UptimeRobot;

include("keys.php");

$robot = new UptimeRobot($__account_key);
$robot->setResponseFormat(UptimeRobot::JSON);
var_dump($robot->getMonitors());