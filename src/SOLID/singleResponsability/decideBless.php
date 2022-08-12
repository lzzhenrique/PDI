<?php
require 'vendor/autoload.php';

use SOLID\openClosed\GreekGod;
use SOLID\openClosed\GreekFollower;
use SOLID\openClosed\NordicFollower;
use SOLID\openClosed\NordicGod;
use SOLID\Oracle;

$oracle = new Oracle();

$greekFollower = new GreekFollower();
$Apollo = new GreekGod();

$devotion = $oracle->checkFollowerDevotion($greekFollower);
echo 'Apollo says: ' . $Apollo->giveBless($devotion);

//#######################################################################################################

$nordicFollower = new NordicFollower();
$Thor = new NordicGod();

$devotion = $oracle->checkFollowerDevotion($nordicFollower);
echo 'Thor says: ' . $Apollo->giveBless($devotion);
