<?php

declare(strict_types=1);

namespace Psr;
final readonly class Request
{
    public function __construct(
        public string $body,
    ) {}
}

interface RequestHandler
{
    public function handle(Request $request): mixed;
}

interface Middleware
{
    public function process(Request $request, RequestHandler $handler): mixed;
}

namespace Symfony;

final class Request
{
    public function __construct(
        public string $body,
    ) {}
}

final readonly class RequestEvent
{
    public function __construct(
        public Request $request,
    ) {}
}

final class ResponseEvent
{
    public function __construct(
        public readonly Request $request,
        public mixed $response,
    ) {}
}

interface Subscriber
{
    public function onRequest(RequestEvent $event): void;

    public function onResponse(ResponseEvent $event): void;
}

namespace Solution;

use Psr\Middleware;
use Psr\Request as PsrRequest;
use Psr\RequestHandler;
use Symfony\RequestEvent;
use Symfony\ResponseEvent;
use Symfony\Subscriber;
use Symfony\Request as SymfonyRequest;

/**
 * Напиши класс, который позволит интегрировать
 * подписчик от Symfony в PSR фреймворк.
 *
 * В ответ можно скопировать только решение.
 */

final readonly class SymfonySubscriberMiddleware implements Middleware
{

    public function __construct(
        private Subscriber $subscriber
    ){}

    public function process(PsrRequest $request, RequestHandler $handler): mixed
    {
        $symfonyRequest = new SymfonyRequest($request->body);
        $this->subscriber->onRequest(new RequestEvent($symfonyRequest));

        $response = $handler->handle(new PsrRequest($symfonyRequest->body));

        $this->subscriber->onResponse(new ResponseEvent($symfonyRequest, $response));

        return $response;
    }
}
