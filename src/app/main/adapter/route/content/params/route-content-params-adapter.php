<?php

namespace app\main\adapter\route\content\params;

use lib\data\protocols\specific\adapter\route\content\AdapterRouteContentInterface;
use lib\presentation\generic\protocols\http\request\params\HttpRequestParamsInterface;

/** route params adaptation to application concept */
class RouteParamsAdapter implements AdapterRouteContentInterface {
  /**
  * adapt request params to application params 
  * @param array $request_content request params
  * @return HttpRequestParamsInterface application params
  */
  static public function adapt(array $request_content): array {
    $params = new HttpRequestParamsInterface();
    
    return $request_content;
  }
}

?>
