<?php

namespace lib\presentation\generic\helper\http\response\success\status\successful;

use lib\presentation\generic\protocols\http\response\HttpResponse;
use lib\presentation\generic\helper\http\response\success\type\successful\NoContentSuccessfulRequest;

/**
* the process on the server was successfully requested
* @param mixed $body response body definition
* @return HttpResponse default http response structure
*/
trait Accepted {
  use NoContentSuccessfulRequest;

  public function accepted($body): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 204;
    $httpResponse->body = $body;
    $httpResponse->successMessage = new NoContentSuccessfulRequest();

    return $httpResponse;
  }
}

?>
