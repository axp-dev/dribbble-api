<?php

declare(strict_types=1);

namespace AXP\DribbbleApi\Utils;

use AXP\DribbbleApi\Exceptions\DribbbleApiException;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\Utils;
use Throwable;

class PromiseUtils
{
    public static function task(callable $task): PromiseInterface
    {
        $queue = Utils::queue();
        $promise = new Promise([$queue, 'run']);
        $queue->add(function () use ($task, $promise) {
            try {
                $promise->resolve($task());
            } catch (DribbbleApiException $e) {
                $promise->reject($e);
            } catch (Throwable $e) {
                $promise->reject(new DribbbleApiException($e->getMessage(), 0, $e));
            }
        });

        return $promise;
    }

    public static function wait(PromiseInterface $promise)
    {
        try {
            return $promise->wait();
        } catch (DribbbleApiException $e) {
            throw $e;
        } catch (Throwable $e) {
            throw new DribbbleApiException($e->getMessage());
        }
    }
}
