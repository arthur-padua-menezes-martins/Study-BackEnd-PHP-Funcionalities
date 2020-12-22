<?php

namespace lib\data\usecases\session\finalize;

use lib\data\protocols\session\finalize\FinalizeSessionInterface;
use lib\data\usecases\session\start\StartSession;

/** auxiliary to finalize session */
abstract class FinalizeSession extends StartSession implements FinalizeSessionInterface {
  /** finalize session */
  static public function finalize(): void {
    session_destroy();
  }

  /** clear session content */
  static public function clear(): void {
    self::$session = [];
  }
}

?>
