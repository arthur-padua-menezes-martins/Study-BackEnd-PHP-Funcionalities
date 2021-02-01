<?php

/** application request type */
class HttpRequestInterface {
  /** @var HttpRequestHeadersInterface $headers request headers */
  public HttpRequestHeadersInterface $headers;
  /** @var HttpRequestSessionInterface $session request session */
  public HttpRequestSessionInterface $session;
  /** @var HttpRequestBodyInterface $body request body */
  public HttpRequestBodyInterface $body;
  /** @var HttpRequestParamsInterface $params request url params */
  public HttpRequestParamsInterface $params;
  /** @var HttpRequestQueryInterface $query request url query string */
  public HttpRequestQueryInterface $query;
  /** @var HttpRequestOptionsInterface $options request options */
  public HttpRequestOptionsInterface $options;
}

?>
