<?php

use function Eloquent\Phony\Kahlan\mock;

use Psr\Http\Server\MiddlewareInterface;

use Ellipse\Middleware\HostBasedMiddleware;
use Ellipse\Middleware\UrlPartBasedMiddleware;

describe('HostBasedMiddleware', function () {

    beforeEach(function () {

        $this->delegate = mock(MiddlewareInterface::class);

        $this->middleware = new HostBasedMiddleware('pattern', $this->delegate->get());

    });

    it('should extends UrlPartBasedMiddleware', function () {

        expect($this->middleware)->toBeAnInstanceOf(UrlPartBasedMiddleware::class);

    });

});
