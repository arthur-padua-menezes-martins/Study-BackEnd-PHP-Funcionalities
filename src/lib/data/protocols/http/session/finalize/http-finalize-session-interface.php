<?php

namespace lib\data\protocols\http\session\finalize;

/** finalize session */
interface FinalizeSessionInterface {
  /** clear session */
  public function clear(): void;

  /** finalize session */
  public function finalize(): void;
}

?>
