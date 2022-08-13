<?php

use Calisthenics\GoodExamples\GoodVitaminMaker;

try {
    $test = new GoodVitaminMaker();
    $vitamin = $test->makeVitamin(3, 2, 3);
    echo $vitamin;
} catch (Exception $exception) {
    echo $exception->getMessage();
}