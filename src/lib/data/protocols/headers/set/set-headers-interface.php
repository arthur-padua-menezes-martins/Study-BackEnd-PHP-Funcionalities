<?php

namespace lib\data\protocols\headers\set;

/** set headers */
interface SetHeadersInterface {
  /**
  * set headers
  * @param array $headers headers constent
  */
  static public function setHeaders(array $headers): void;

  /**
  * set status code
  * @param array $statusCode status code constent
  */
  static public function setStatusCode(int $statusCode): void;
}

?>
