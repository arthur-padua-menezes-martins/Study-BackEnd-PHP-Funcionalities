<?php

namespace lib\presentation\generic\helper\http\response\error\status;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponse;
use lib\presentation\generic\helper\http\response\error\type\client\UnprocessableError;

/**
* the server cannot process the request due to the unprocessable error
* @return HttpResponse default http response structure
*/
trait Unprocessable {
  use UnprocessableError;

  public function unauthorized(): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 422;
    $httpResponse->errorMessage = new UnprocessableError();

    return $httpResponse;
  }
}

?>
