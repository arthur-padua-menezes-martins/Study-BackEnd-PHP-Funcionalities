<?php

namespace app\main\adapter\route\content\session;

use lib\presentation\generic\protocols\http\request\session\HttpRequestSessionInterface;
use lib\data\usecases\http\session\LifeCycleSession;

/** route session adaptation to application concept */
trait RouteSessionAdapter {
  /**
  * adapt request session to application session 
  * @param array $requestSession request session
  * @return HttpRequestSessionInterface application session
  */
  static public function adapt_session(array &$requestSession): HttpRequestSessionInterface {
    $session = new HttpRequestSessionInterface();
    $session->methods = LifeCycleSession::start($requestSession);

    return $session;
  }
}

?>
