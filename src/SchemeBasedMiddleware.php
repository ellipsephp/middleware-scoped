<?php declare(strict_types=1);

namespace Ellipse\Middleware;

use Psr\Http\Server\MiddlewareInterface;

class SchemeBasedMiddleware extends UrlPartBasedMiddleware
{
    public function __construct(string $scheme, MiddlewareInterface $delegate)
    {
        $pattern = '/^' . preg_quote($scheme, '/') . '$/';

        parent::__construct($pattern, PHP_URL_SCHEME, $delegate);
    }
}
