<?php

namespace lib\presentation\generic\protocols\http\request\session;

use lib\data\protocols\http\session\LifeCycleSessionInterface;

abstract class HttpRequestSessionInterface {
  /** @var LifeCycleSessionInterface $methods session controller methods */
  public LifeCycleSessionInterface $methods;
}

?>
