<?php

namespace lib\data\protocols\http\session\regenerate;

/** regenerate session */
interface RegenerateSessionInterface {
  /** regenerate session to another state */
  public function regenerate(): void;
}

?>
