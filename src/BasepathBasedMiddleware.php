<?php declare(strict_types=1);

namespace Ellipse\Middleware;

use Psr\Http\Server\MiddlewareInterface;

class BasepathBasedMiddleware extends UrlPartBasedMiddleware
{
    public function __construct(string $basepath, MiddlewareInterface $delegate)
    {
        $pattern = '/^' . preg_quote($basepath, '/') . '.*$/';

        parent::__construct($pattern, PHP_URL_PATH, $delegate);
    }
}
