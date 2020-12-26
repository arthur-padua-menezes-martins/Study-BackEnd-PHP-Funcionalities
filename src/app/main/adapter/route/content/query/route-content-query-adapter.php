<?php

namespace app\main\adapter\route\content\query;

use lib\presentation\generic\protocols\http\request\query\HttpRequestQueryInterface;

/** route query adaptation to application concept */
trait RouteQueryAdapter {
  /**
  * adapt request query to application query 
  * @param array $requestQuery request query
  * @return HttpRequestQueryInterface application query
  */
  static public function adapt_query(array $requestQuery): array {
    $query = new HttpRequestQueryInterface();
    
    return $requestQuery;
  }
}

?>
