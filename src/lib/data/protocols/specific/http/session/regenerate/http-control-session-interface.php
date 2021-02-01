<?php

/** regenerate session */
interface RegenerateSessionInterface {
  /** regenerate session to another state */
  public function regenerate(): void;
}

?>
