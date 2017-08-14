<?php
include_once '../vendor/autoload.php';

$config = require_once 'config.php';
$token = $config['token'];

$DribbbleApi = new AXP\DribbbleApi\DribbbleApi($token);
$BucketsShots = $DribbbleApi->getBucketsShots(471756);

print_r($BucketsShots);