<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$authToken = getenv('DRIBBBLE_AUTH_TOKEN');

$dribbble = AXP\DribbbleApi\DribbbleApi::builder()
    ->setAuthToken($authToken)
    ->build();

$response = $dribbble->getProjectsList();

print_r($response);