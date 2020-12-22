<?php

namespace lib\data\protocols\session\start;

/** auxiliary to start session */
interface StartSessionInterface {
  /** start session */
  static public function start(): array;
}

?>
