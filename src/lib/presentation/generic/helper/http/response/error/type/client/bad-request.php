<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponseInterface;

/** the server cannot or will not process the request due to client error */
trait BadRequest {
  /**
  * bad request type error
  * @param mixed $body response body definition
  * @param string $successMessage response success message definition
  * @param Exception $errorMessage response error message definition
  * @return HttpResponse default http response structure
  */
  public function bad_request($body, string $successMessage = '', Exception $errorMessage = null): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 400;
    $httpResponse->body = $body;
    $httpResponse->successMessage = $successMessage;
    $httpResponse->errorMessage = $errorMessage;

    return $httpResponse;
  }
}

?>
