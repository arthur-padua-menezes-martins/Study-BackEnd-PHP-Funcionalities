<?php

namespace app\main\adapter\route\options;

use lib\presentation\generic\protocols\http\request\options\HttpRequestOptionsInterface;

/** route options adaptation to application concept */
trait RouteOptionsAdapter {
  /**
  * adapt request options to application options 
  * @param array $requestOptions request options
  * @return HttpRequestOptionsInterface application options
  */
  static public function getOptions(array $requestOptions): HttpRequestOptionsInterface {
    $options = new HttpRequestOptionsInterface();
    $options->method = $requestOptions['method'];

    return $options;
  }
}

?>
