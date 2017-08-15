<?php
include_once '../vendor/autoload.php';

$config = require_once 'config.php';
$token = $config['token'];

$DribbbleApi = new AXP\DribbbleApi\DribbbleApi($token);
$Shot = $DribbbleApi->getShot(3734805);

print_r($Shot);