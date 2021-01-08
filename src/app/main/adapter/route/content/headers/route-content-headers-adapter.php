<?php

namespace app\main\adapter\route\content\headers;

use lib\data\protocols\specific\adapter\route\content\AdapterRouteContentInterface;
use lib\presentation\generic\protocols\http\request\headers\HttpRequestHeadersInterface;
use lib\data\usecases\http\headers\LifeCycleHeaders;
 
/** route headers adaptation to application concept */
class RouteHeadersAdapter implements AdapterRouteContentInterface {
  /**
  * adapt request headers to application headers 
  * @param array $request_content request headers
  * @return HttpRequestHeadersInterface application headers
  */
  static public function adapt(array $request_content): HttpRequestHeadersInterface {
    $headers = new HttpRequestHeadersInterface();
    $headers->methods = LifeCycleHeaders::start();
    $headers->accept = $request_content['Accept'];
    $headers->content_type = $request_content['Content-Type'];
    $headers->host = $request_content['Host'];
    $headers->origin = $request_content['Origin'];
    $headers->referer = $request_content['Referer'];
    $headers->user_agent = $request_content['User-Agent'];

    return $headers;
  }
}

?>
