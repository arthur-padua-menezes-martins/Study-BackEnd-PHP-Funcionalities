<?php

namespace lib\presentation\generic\helper\http\response\error\status;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponse;
use lib\presentation\generic\helper\http\response\error\type\client\UnauthorizedError;

/**
* the server cannot process the request due to the unauthorized error
* @return HttpResponse default http response structure
*/
trait Unauthorized {
  use UnauthorizedError;

  public function unauthorized(): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 401;
    $httpResponse->errorMessage = new UnauthorizedError();

    return $httpResponse;
  }
}

?>
