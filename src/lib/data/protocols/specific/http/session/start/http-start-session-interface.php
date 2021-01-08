<?php

namespace lib\data\protocols\specific\http\session\start;

/** start session */
interface StartSessionInterface {
  /**
  * start session
  * @param array $session session content 
  * @return self
  */
  static public function start(array &$session): self;
}

?>