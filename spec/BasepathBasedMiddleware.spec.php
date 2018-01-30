<?php

use function Eloquent\Phony\Kahlan\mock;

use Psr\Http\Server\MiddlewareInterface;

use Ellipse\Middleware\BasepathBasedMiddleware;
use Ellipse\Middleware\UrlPartBasedMiddleware;

describe('BasepathBasedMiddleware', function () {

    beforeEach(function () {

        $this->delegate = mock(MiddlewareInterface::class);

        $this->middleware = new BasepathBasedMiddleware('pattern', $this->delegate->get());

    });

    it('should extends UrlPartBasedMiddleware', function () {

        expect($this->middleware)->toBeAnInstanceOf(UrlPartBasedMiddleware::class);

    });

});
