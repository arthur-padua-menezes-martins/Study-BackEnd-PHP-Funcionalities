<?php

namespace lib\presentation\generic\protocols\http\request\options;

abstract class HttpRequestOptionsInterface {
  /** @var string $host request host */
  public string $host;
  /** @var string $method resquest method */
  public string $method;
}

?>
