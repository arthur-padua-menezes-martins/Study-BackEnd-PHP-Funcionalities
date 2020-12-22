<?php

namespace lib\presentation\generic\helper\http\response\success\status\successful;

use lib\presentation\generic\protocols\http\response\HttpResponse;
use lib\presentation\generic\helper\http\response\success\type\successful\OkSuccessfulRequest;

/**
* the process on the server was successfully requested
* @param mixed $body response body definition
* @return HttpResponse default http response structure
*/
trait Ok {
  use OkSuccessfulRequest;

  public function ok($body): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 200;
    $httpResponse->body = $body;
    $httpResponse->successMessage = new OkSuccessfulRequest();

    return $httpResponse;
  }
}

?>
