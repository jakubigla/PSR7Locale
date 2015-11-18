<?php

namespace PSR7Locale\Http;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Zend\Stratigility\MiddlewareInterface;

/**
 * Class LocaleMiddleware
 *
 * @package PSR7Locale\Http
 * @author  Jakub Igla <jakub.igla@gmail.com>
 */
class LocaleMiddleware implements MiddlewareInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(Request $request, Response $response, callable $out = null)
    {
        if (null !== $out) {
            $response = $out($request, $response);
        }

        return $response;
    }
}
