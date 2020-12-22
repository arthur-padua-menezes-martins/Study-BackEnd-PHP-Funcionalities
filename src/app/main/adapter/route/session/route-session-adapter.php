<?php

namespace app\main\adapter\route\session;

use lib\presentation\generic\protocols\http\request\session\HttpRequestSessionInterface;
use lib\data\usecases\session\SessionController;

/** route session adaptation to application concept */
trait RouteSessionAdapter {
  /**
  * adapt request session to application session 
  * @param array $requestSession request session
  * @return HttpRequestSessionInterface application session
  */
  static public function getSession(array &$requestSession): HttpRequestSessionInterface {
    $session = new HttpRequestSessionInterface();
    $session->instance = SessionController::start($requestSession);
    
    return $session;
  }
}

?>
