<?php

/** auxiliary to url life cycle */
final class LifeCycleUrl implements LifeCycleUrlInterface {
  private HttpRequestOptionsInterface $requestOptions;

  public function __construct(HttpRequestOptionsInterface $requestOptions) {
    $this->requestOptions = $requestOptions;
  }
}

?>
