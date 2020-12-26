<?php

namespace app\main\adapter\route\content\options;

use lib\presentation\generic\protocols\http\request\options\HttpRequestOptionsInterface;

/** route options adaptation to application concept */
trait RouteOptionsAdapter {
  /**
  * adapt request options to application options 
  * @param array $requestOptions request options
  * @return HttpRequestOptionsInterface application options
  */
  static public function adapt_options(array $requestOptions): HttpRequestOptionsInterface {
    $options = new HttpRequestOptionsInterface();
    $options->host = $requestOptions['HTTP_HOST'];
    $options->method = $requestOptions['REQUEST_METHOD'];

    return $options;
  }
}

?>
