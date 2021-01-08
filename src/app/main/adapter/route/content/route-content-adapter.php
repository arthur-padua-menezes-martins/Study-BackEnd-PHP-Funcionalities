<?php

namespace app\main\adapter\route\content;

use lib\data\protocols\specific\adapter\route\AdapterRouteInterface;
use lib\data\protocols\specific\adapter\route\content\AdapterRouteContentInterface;
use lib\presentation\generic\protocols\http\request\HttpRequestInterface;

/** route content adaptation to application concept */
class RouteContentAdapter implements AdapterRouteInterface {
  /** @var array<AdapterRouteContentInterface> $adapters route content adapters */
  static private array $adapters;

  /**
  * define route adapters
  * @param array<AdapterRouteContentInterface> $adapters route content adapters
  */
  public function __construct(array $adapters) {
    foreach($adapters as $adapter_key => $adapter_value) {
      self::$adapters[$adapter_key] = $adapter_value;
    }
  }

  /**
  * adapt route content to application route content
  * @param mixed $request application request
  * @param array $request_content route content
  */
  static public function adapt(HttpRequestInterface &$request, array $request_content): void {
    foreach($request_content as $request_content_key => $request_content_value) {
      self::$adapters[$request_content_key]->adapt($request_content_value);
    }
  }
}

?>
