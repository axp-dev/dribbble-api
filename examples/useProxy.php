<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$authToken = getenv('DRIBBBLE_AUTH_TOKEN');
$proxy = getenv('DRIBBBLE_PROXY');

$dribbble = AXP\DribbbleApi\DribbbleApi::builder()
    ->setAuthToken($authToken)
    ->setProxyUri($proxy)
    ->build();

$response = $dribbble->getProjectsList();

print_r($response);