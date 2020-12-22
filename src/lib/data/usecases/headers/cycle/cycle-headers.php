<?php

namespace lib\data\usecases\headers\cycle;

use lib\data\protocols\headers\cycle\CycleHeadersInterface;

/** auxiliary to headers life cycle */
abstract class CycleHeaders implements CycleHeadersInterface {
  /** restricted constructor */
  private function __construct() {}

  /**
  * start headers
  * @return CycleHeaders class instace
  */
  static public function start(): self {
    $headers_instance = new CycleHeaders(); 
    return $headers_instance;
  }

  /**
  * set headers
  * @param array $headers headers content
  */
  static public function setHeaders(array $headers): void {
    $headersLength = count($headers);

    for ($i = 0; $i < $headersLength; $i++) {
      foreach ($headers as $header => $value ) {
        if ($value) {
          header("{$header}: {$value}");
        } else {
          header("{$header}");
        }
      }
    }
  }

  /**
  * set status code
  * @param int $statusCode status code content
  */
  static public function setStatusCode(int $statusCode): void {
    http_response_code($statusCode);
  }
}

?>
