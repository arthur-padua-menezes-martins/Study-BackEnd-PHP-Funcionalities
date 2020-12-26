<?php

namespace app\main\adapter\route\content\params;

use lib\presentation\generic\protocols\http\request\params\HttpRequestParamsInterface;

/** route params adaptation to application concept */
trait RouteParamsAdapter {
  /**
  * adapt request params to application params 
  * @param array $requestParams request params
  * @return HttpRequestParamsInterface application params
  */
  static public function adapt_params(array $requestParams): array {
    $params = new HttpRequestParamsInterface();
    
    return $requestParams;
  }
}

?>
