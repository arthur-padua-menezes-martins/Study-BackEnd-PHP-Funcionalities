<?php

/** route adaptation to application concept */
class RouteAdapter {
  /**
  * application entry point
  * @param ControllerInterface $controller route controller
  */
  static public function handle(ControllerInterface $controller): HttpResponseInterface {
    $request = new HttpRequestInterface();

    $route_content_adapter = new RouteContentAdapter([
      HttpRequestEnum::headers => new RouteHeadersAdapter(),
      HttpRequestEnum::session => new RouteSessionAdapter(),
      HttpRequestEnum::body => new RouteBodyAdapter(),
      HttpRequestEnum::params => new RouteParamsAdapter(),
      HttpRequestEnum::query => new RouteQueryAdapter(),
      HttpRequestEnum::options => new RouteOptionsAdapter()
    ]);

    $route_content_adapter::adapt($request, [
      HttpRequestEnum::headers => getallheaders(),
      HttpRequestEnum::session => $_SESSION,
      HttpRequestEnum::body => $_POST,
      HttpRequestEnum::params => $_GET,
      HttpRequestEnum::query => $_GET,
      HttpRequestEnum::options => $_SERVER
    ]);

    $response = $controller->handle($request);

    $request->headers->instance->set_status_code($response->statusCode);
    return $response;
  }
}

?>
