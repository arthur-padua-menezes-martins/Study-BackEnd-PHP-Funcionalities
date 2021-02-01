<?php

/** auxiliary to headers life cycle */
final class LifeCycleHeaders implements LifeCycleHeadersInterface {
  /** restricted constructor */
  private function __construct() {}

  /**
  * start headers
  * @return self class instace
  */
  static public function start(): self {
    $headers_instance = new self();
    return $headers_instance;
  }

  /**
  * set headers
  * @param array $headers headers content
  */
  static public function set_headers(array $headers): void {
    foreach ($headers as $header => $value ) {
      if ($value) {
        header("{$header}: {$value}");
      } else {
        header("{$header}");
      }
    }
  }

  /**
  * set status code
  * @param int $statusCode status code content
  */
  static public function set_status_code(int $statusCode): void {
    http_response_code($statusCode);
  }
}

?>
