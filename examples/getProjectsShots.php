<?php
include_once '../vendor/autoload.php';

$config = require_once 'config.php';
$token = $config['token'];

$DribbbleApi   = new AXP\DribbbleApi\DribbbleApi($token);
$ProjectsShots = $DribbbleApi->getProjectsShots(541537);

print_r($ProjectsShots);