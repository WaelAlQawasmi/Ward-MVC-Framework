<?php
namespace  App\Middleware;

use Framework\Request;
use Framework\RequestHandlerInterface;
use Framework\Response;
use Framework\MiddlewareInterface;

class ChangeResponse implements MiddlewareInterface{

    public function process(Request $request ,RequestHandlerInterface $next): Response{
        $response= $next->handle($request);
        if ($response->getBody() !== null)
            $response->setBody($response->getBody() ."</br>HI FROM MIDDELWARE");
        return $response;

    }
}
