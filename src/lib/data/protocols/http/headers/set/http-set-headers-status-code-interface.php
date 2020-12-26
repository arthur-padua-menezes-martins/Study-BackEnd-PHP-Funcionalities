<?php

namespace lib\data\protocols\http\headers\set;

/** set headers status code */
interface SetHeadersStatusCodeInterface {
  /**
  * set status code
  * @param array $statusCode status code constent
  */
  static public function set_status_code(int $statusCode): void;
}

?>
