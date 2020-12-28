<?php

namespace app\main\adapter\route\content\session;

use lib\data\protocols\adapter\route\content\AdapterRouteContentInterface;
use lib\presentation\generic\protocols\http\request\session\HttpRequestSessionInterface;
use lib\data\usecases\http\session\LifeCycleSession;

/** route session adaptation to application concept */
class RouteSessionAdapter implements AdapterRouteContentInterface {
  /**
  * adapt request session to application session 
  * @param array $request_content request session
  * @return HttpRequestSessionInterface application session
  */
  static public function adapt(array &$request_content): HttpRequestSessionInterface {
    $session = new HttpRequestSessionInterface();
    $session->methods = LifeCycleSession::start($requestSession);

    return $session;
  }
}

?>
