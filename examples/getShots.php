<?php
include_once '../vendor/autoload.php';

$config = require_once 'config.php';
$token = $config['token'];

$DribbbleApi = new AXP\DribbbleApi\DribbbleApi($token);
$Shots = $DribbbleApi->getShots(['per_page' => 20]);

print_r($Shots);