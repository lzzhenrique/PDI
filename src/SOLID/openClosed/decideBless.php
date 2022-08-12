<?php
require 'vendor/autoload.php';

use SOLID\GreekGod;
use SOLID\GreekFollower;
use SOLID\Oracle;

$follower = new GreekFollower();
$oracle = new Oracle();
$Apollo = new GreekGod();

$oracle->checkFollowerDevotion($follower);
echo $Apollo->giveBless($follower);