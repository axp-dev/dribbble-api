<?php
use AXP\DribbleApi\DribbbleApi;

$DribbbleApi = new DribbbleApi('70a6cf45dce2b0aa98265351a32a9121699a84d70c40e710318f88ee347b55b6');

$shots = $DribbbleApi->getShots(['per_page' => 100]);

print_r($shots);