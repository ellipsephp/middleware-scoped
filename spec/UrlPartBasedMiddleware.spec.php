<?php

use function Eloquent\Phony\Kahlan\mock;

use Psr\Http\Server\MiddlewareInterface;

use Ellipse\Middleware\UrlPartBasedMiddleware;

describe('UrlPartBasedMiddleware', function () {

    beforeEach(function () {

        $this->delegate = mock(MiddlewareInterface::class);

        $this->middleware = new UrlPartBasedMiddleware('pattern', PHP_URL_SCHEME, $this->delegate->get());

    });

    it('should implement MiddlewareInterface', function () {

        expect($this->middleware)->toBeAnInstanceOf(MiddlewareInterface::class);

    });

});
