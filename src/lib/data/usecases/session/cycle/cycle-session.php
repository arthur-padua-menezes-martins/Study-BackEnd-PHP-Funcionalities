<?php

namespace lib\data\usecases\session\cycle;

use lib\data\protocols\session\cycle\CycleSessionInterface;

/** auxiliary to session life cycle */
abstract class CycleSession implements CycleSessionInterface {
  /** session content */
  static public $session;

  /** restricted constructor */
  private function __construct() {}

  /**
  * start session
  * @param array &$session initial session content
  * @return CycleSession class instace
  */
  static public function start(array &$session): self {
    if (!session_id()) {
      session_start();
    }

    if (!(self::$session)) {
      self::$session = $session;
    }
  
    $session_instance = new CycleSession(); 
    return $session_instance;
  }

  /** finalize session */
  public function finalize(): void {
    session_destroy();
  }
  
  /** clear session content */
  public function clear(): void {
    self::$session = [];
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
  public function __set(string $property, $value): void {
    if (isset($value)) {
      self::$session[$property] = $value;
    }
  }
}

?>
