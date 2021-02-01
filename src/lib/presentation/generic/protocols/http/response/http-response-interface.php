<?php

/** application response type */
class HttpResponseInterface {
  /** @var int $statusCode response status code */
  public int $statusCode;
  /** @var HttpResponseBodyInterface $body response body */
  public HttpResponseBodyInterface $body;
  /** @var string $successMessage response success message */
  public string $successMessage;
  /** @var Exception $errorMessage response error message */
  public Exception $errorMessage;
}

?>
