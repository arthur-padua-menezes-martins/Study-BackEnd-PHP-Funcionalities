<?php

namespace lib\data\protocols\specific\http\session\regenerate;

/** regenerate session */
interface RegenerateSessionInterface {
  /** regenerate session to another state */
  public function regenerate(): void;
}

?>
