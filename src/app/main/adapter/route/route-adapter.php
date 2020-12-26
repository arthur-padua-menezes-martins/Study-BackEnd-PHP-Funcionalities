<?php

namespace app\main\adapter\route;

use lib\presentation\generic\protocols\controller\ControllerInterface;
use lib\presentation\generic\protocols\http\request\HttpRequestInterface;
use lib\presentation\generic\protocols\http\response\HttpResponseInterface;
use app\main\adapter\route\content\RouteContentAdapter;

/** route adaptation to application concept */
class RouteAdapter {
  /**
  * application entry point
  * @param ControllerInterface $controller route controller
  */
  static public function handle(ControllerInterface $controller): HttpResponseInterface {
    $request = new HttpRequestInterface();
    RouteContentAdapter::adapt($request, ['headers' => getallheaders(), 'session' => $_SESSION, 'body' => $_POST, 'params' => $_GET, 'query' => $_GET, 'options' => $_SERVER]);

    $response = $controller->handle($request);

    $request->headers->instance->set_status_code($response->statusCode);
    return $response;
  }
}

?>
