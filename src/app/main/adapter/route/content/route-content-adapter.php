<?php

namespace app\main\adapter\route\content;

use lib\data\protocols\adapter\content\AdapterContentInterface;
use app\main\adapter\route\content\headers\RouteHeadersAdapter;
use app\main\adapter\route\content\session\RouteSessionAdapter;
use app\main\adapter\route\content\body\RouteBodyAdapter;
use app\main\adapter\route\content\params\RouteParamsAdapter;
use app\main\adapter\route\content\query\RouteQueryAdapter;
use app\main\adapter\route\content\options\RouteOptionsAdapter;

/** route content adaptation to application concept */
class RouteContentAdapter implements AdapterContentInterface {
  use RouteHeadersAdapter, RouteSessionAdapter, RouteBodyAdapter, RouteParamsAdapter, RouteQueryAdapter, RouteOptionsAdapter;

  /**
  * adapt route content to application route content
  * @param mixed $reference application request
  * @param array $content route content
  */
  static public function adapt(&$reference, array $content): void {
    foreach ($content as $content_type => $content_value) {
      $response =  call_user_func_array(array('self', "adapt_{$content_type}"), $content_value);
      $reference->$content_type = $response;
    }
  }
}

?>
