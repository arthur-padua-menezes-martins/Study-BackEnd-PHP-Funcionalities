<?php

namespace lib\data\usecases\http\session;

use lib\data\protocols\specific\http\session\LifeCycleSessionInterface;

/** auxiliary to session life cycle */
final class LifeCycleSession implements LifeCycleSessionInterface {
  /** class instance */
  static private self $_instance;
  /** session content */
  static private array $_session;

  /** restricted constructor */
  private function __construct() {}

  /**
  * start session
  * @param array &$session initial session content
  * @return self class instace
  */
  static public function start(array &$session): self {
    if (!session_id()) {
      session_start();
    }

    self::$_instance = new self();

    if (!(self::$_session)) {
      self::$_session = $session;
    }

    return self::$_instance::$_instance;
  }

  /**
  * verify if has in session
  * @param string $property property name
  * @return bool has property
  */
  public function has(string $property): bool {
    return 
      !empty(self::$_session[$property]) && 
      isset(self::$_session[$property]);
  }

  /** regenerate session id */
  public function regenerate(): void {
    session_regenerate_id(true);
  }

  /** finalize session */
  public function finalize(): void {
    session_destroy();
  }
  
  /** clear session content */
  public function clear(): void {
    self::$_session = [];
  }

  /**
  * get session property
  * @param string $property property name
  * @return mixed property value
  */
  public function __get(string $property) {
    if ($this->has(self::$_session[$property])) {
      $session_property = clone self::$_session[$property];
    } else {
      $session_property = null;
    }

    return $session_property;
  }
 
  /**
  * set session property
  * @param string $property property name
  * @param mixed $value property value
  */
  public function __set(string $property, $value): void {
    self::$_session[$property] = $value;
  }
}

?>
