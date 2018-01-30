<?php declare(strict_types=1);

namespace Ellipse\Middleware;

use Psr\Http\Server\MiddlewareInterface;

class HostBasedMiddleware extends UrlPartBasedMiddleware
{
    public function __construct(string $host, MiddlewareInterface $delegate)
    {
        $pattern = '/^' . preg_quote($host, '/') . '$/';

        parent::__construct($pattern, PHP_URL_HOST, $delegate);
    }
}
