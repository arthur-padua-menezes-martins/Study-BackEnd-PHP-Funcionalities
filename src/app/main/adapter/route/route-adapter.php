<?php

namespace app\main\adapter\route;

use lib\presentation\generic\protocols\controller\ControllerInterface;
use lib\presentation\generic\protocols\http\request\HttpRequestInterface;
use app\main\adapter\route\headers\RouteHeadersAdapter;
use app\main\adapter\route\session\RouteSessionAdapter;
use app\main\adapter\route\body\RouteBodyAdapter;
use app\main\adapter\route\params\RouteParamsAdapter;
use app\main\adapter\route\query\RouteQueryAdapter;
use app\main\adapter\route\options\RouteOptionsAdapter;

/**
* route adaptation to application concept
* @param ControllerInterface $controller application controller
*/
class RouteAdapter {
  use RouteHeadersAdapter, RouteSessionAdapter, RouteBodyAdapter, RouteParamsAdapter, RouteQueryAdapter, RouteOptionsAdapter;

  /** application entry point */
  static public function handle(ControllerInterface $controller) {
    $request = new HttpRequestInterface();
    $request->headers = self::getHeaders(getallheaders());
    $request->session = self::getSession($_SESSION);
    $request->body = self::getBody($_POST);
    $request->params = self::getParams($_GET);
    $request->query = self::getQuery($_GET);
    $request->options = self::getOptions($_REQUEST);
  
    $response = $controller->handle($request);

    $request->headers->instance->setStatusCode($response->statusCode);
    print $response;
  }
}

?>
