<?php

namespace lib\data\protocols\session\finalize;

/** finalize session */
interface FinalizeSessionInterface {
  /** finalize session */
  public function finalize(): void;

  /** clear session */
  public function clear(): void;
}

?>
