<?php

abstract class HttpRequestBodyInterface {
  private static array $body = [];

  /**
  * get body property
  * @param string $property property name
  * @return mixed property value
  */
  public function __get(string $property) {
    if (isset($this->body[$property])) {
      $body_property = clone $this->body[$property];
    } else {
      $body_property = null;
    }

    return $body_property;
  }

  /**
  * set body property
  * @param string $property property name
  * @param mixed $value property value
  */
  public function __set(string $property, $value): void {
    if (isset($value)) {
      $this->body[$property] = $value;
    }
  }
}

?>
