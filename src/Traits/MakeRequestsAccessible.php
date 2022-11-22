<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Traits;

use AXP\DribbbleApi\Client\Client;

trait MakeRequestsAccessible
{
    use MakeAttachmentsRequestAccessible;
    use MakeJobsRequestAccessible;
    use MakeProjectsRequestAccessible;
    use MakeShortsRequestAccessible;
    use MakeUserRequestAccessible;

    abstract protected function getClient(): Client;
}
