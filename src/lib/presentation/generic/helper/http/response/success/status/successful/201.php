<?php

namespace lib\presentation\generic\helper\http\response\success\status\successful;

use lib\presentation\generic\protocols\http\response\HttpResponse;
use lib\presentation\generic\helper\http\response\success\type\successful\CreatedSuccessfulRequest;

/**
* the process on the server was successfully requested
* @param mixed $body response body definition
* @return HttpResponse default http response structure
*/
trait Created {
  use CreatedSuccessfulRequest;

  public function created($body): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 201;
    $httpResponse->body = $body;
    $httpResponse->successMessage = new CreatedSuccessfulRequest();

    return $httpResponse;
  }
}

?>
