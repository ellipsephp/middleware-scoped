<?php

use function Eloquent\Phony\Kahlan\mock;

use Psr\Http\Server\MiddlewareInterface;

use Ellipse\Middleware\SchemeBasedMiddleware;
use Ellipse\Middleware\UrlPartBasedMiddleware;

describe('SchemeBasedMiddleware', function () {

    beforeEach(function () {

        $this->delegate = mock(MiddlewareInterface::class);

        $this->middleware = new SchemeBasedMiddleware('pattern', $this->delegate->get());

    });

    it('should extends UrlPartBasedMiddleware', function () {

        expect($this->middleware)->toBeAnInstanceOf(UrlPartBasedMiddleware::class);

    });

});
