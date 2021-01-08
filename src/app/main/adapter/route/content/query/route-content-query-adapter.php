<?php

namespace app\main\adapter\route\content\query;

use lib\data\protocols\specific\adapter\route\content\AdapterRouteContentInterface;
use lib\presentation\generic\protocols\http\request\query\HttpRequestQueryInterface;

/** route query adaptation to application concept */
class RouteQueryAdapter implements AdapterRouteContentInterface {
  /**
  * adapt request query to application query 
  * @param array $request_content request query
  * @return HttpRequestQueryInterface application query
  */
  static public function adapt(array $request_content): array {
    $query = new HttpRequestQueryInterface();
    
    return $request_content;
  }
}

?>
