<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Response\Interfaces;

use AXP\DribbbleApi\Response\Adapters\OnDecodeContext;

interface OnResponseDecodeInterface
{
    public function onDecode(OnDecodeContext $context): void;
}
