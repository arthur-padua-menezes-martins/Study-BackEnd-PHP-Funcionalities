<?php

namespace lib\presentation\generic\protocols\http\request\session;

use lib\data\protocols\session\cycle\CycleSessionInterface;

abstract class HttpRequestSessionInterface {
  /** @var CycleSessionInterface $instance session controller instance */
  public CycleSessionInterface $instance;
}

?>
