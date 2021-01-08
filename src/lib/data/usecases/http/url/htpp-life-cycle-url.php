<?php

namespace lib\data\usecases\http\url;

use lib\presentation\generic\protocols\http\request\options\HttpRequestOptionsInterface;

use lib\data\protocols\specific\http\url\LifeCycleUrlInterface;

/** auxiliary to url life cycle */
final class LifeCycleUrl implements LifeCycleUrlInterface {
  private HttpRequestOptionsInterface $requestOptions;

  public function __construct(HttpRequestOptionsInterface $requestOptions) {
    $this->requestOptions = $requestOptions;
  }
}

?>
