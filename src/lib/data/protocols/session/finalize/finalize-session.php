<?php

namespace lib\data\protocols\session\finalize;

/** auxiliary to finalize session */
interface FinalizeSessionInterface {
  /** finalize session */
  static public function finalize(): void;

  /** clear session */
  static public function clear(): void;
}

?>
