<?php declare(strict_types=1);

namespace Ellipse\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class UrlPartBasedMiddleware implements MiddlewareInterface
{
    private $pattern;
    private $part;
    private $delegate;

    public function __construct(string $pattern, int $part, MiddlewareInterface $delegate)
    {
        $this->pattern = $pattern;
        $this->part = $part;
        $this->delegate = $delegate;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $part = parse_url((string) $request->getUri(), $this->part);

        if (preg_match($this->pattern, $part) == 1) {

            return $this->delegate->process($request, $handler);

        }

        return $handler->handle($request);
    }
}
