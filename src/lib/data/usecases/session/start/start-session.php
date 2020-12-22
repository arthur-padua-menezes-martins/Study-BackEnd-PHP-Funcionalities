<?php

namespace lib\data\usecases\session\start;

use lib\data\protocols\session\start\StartSessionInterface;

/** auxiliary to start session */
abstract class StartSession implements StartSessionInterface {
  /** session content */
  static public $session;

  /**
  * start session
  * @param array &$session initial session content
  */
  static public function start(array &$session = []): array {
    if (!session_id()) {
      session_start();
    }

    if (!(self::$session)) {
      self::$session = $session;
    }

    return self::$session;
  }

  /**
  * get session property
  * @param string $property property name
  * @return mixed property value
  */
  public function __get(string $property) {
    if (isset(self::$session[$property])) {
      $session_property = clone self::$session[$property];
    } else {
      $session_property = [];
    }

    return $session_property;
  }

  /**
  * set session property
  * @param string $property property name
  * @param mixed $value property value
  */
  public function __set(string $property = null, $value) {
    if (isset($value)) {
      self::$session[$property] = $value;
    }
  }
}

?>
