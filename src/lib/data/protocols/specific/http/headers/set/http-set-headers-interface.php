<?php

namespace lib\data\protocols\specific\http\headers\set;

/** set headers */
interface SetHeadersInterface {
  /**
  * set headers
  * @param array $headers headers constent
  */
  static public function set_headers(array $headers): void;
}

?>
