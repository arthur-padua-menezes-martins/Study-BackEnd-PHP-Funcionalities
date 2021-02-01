<?php

abstract class HttpRequestHeadersInterface {
  /** @var LifeCycleHeadersInterface $instance headers controller methods */
  public LifeCycleHeadersInterface $methods;
  /** @var string $accept resquest accept */
  public string $accept;
  /** @var string $content_type resquest content type */
  public string $content_type;
  /** @var string $host resquest method */
  public string $host;
  /** @var string $origin resquest origin */
  public string $origin;
  /** @var string $referer resquest referer */
  public string $referer;
  /** @var string $user_agent resquest user agent */
  public string $user_agent;
}

?>
