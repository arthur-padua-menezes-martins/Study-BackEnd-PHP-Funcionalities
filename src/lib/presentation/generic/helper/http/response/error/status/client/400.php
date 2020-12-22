<?php

namespace lib\presentation\generic\helper\http\response\error\status\client;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponse;

/**
* the server cannot or will not process the request due to client error
* @param mixed $body response body definition
* @param string $successMessage response success message definition
* @param Exception $errorMessage response error message definition
* @return HttpResponse default http response structure
*/
trait BadRequest {
  public function badRequest($body, string $successMessage = '', Exception $errorMessage = null): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 400;
    $httpResponse->body = $body;
    $httpResponse->successMessage = $successMessage;
    $httpResponse->errorMessage = $errorMessage;

    return $httpResponse;
  }
}

?>
