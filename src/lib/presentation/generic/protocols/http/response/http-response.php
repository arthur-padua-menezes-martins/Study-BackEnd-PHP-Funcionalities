<?php

namespace lib\presentation\generic\protocols\http\response;

use Exception;
use lib\presentation\generic\protocols\http\response\body\HttpResponseBodyInterface;

/** application response type */
class HttpResponse {
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
