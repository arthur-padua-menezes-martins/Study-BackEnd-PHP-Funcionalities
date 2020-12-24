<?php

namespace lib\data\protocols\http\session\control;

/** control session */
interface ControlSessionInterface {
  /**
  * verify if has in session
  * @param string $property property name
  * @return bool has property
  */
  public function has(string $property): bool;

  /** regenerate session */
  public function regenerate(): void;
}

?>
