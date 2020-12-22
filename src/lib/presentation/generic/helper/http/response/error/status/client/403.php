<?php

namespace lib\presentation\generic\helper\http\response\error\status;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponse;
use lib\presentation\generic\helper\http\response\error\type\client\ForbiddenError;

/**
* the server cannot process the request due to the forbidden error
* @return HttpResponse default http response structure
*/
trait Forbidden {
  use ForbiddenError;

  public function forbidden(): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 403;
    $httpResponse->errorMessage = new ForbiddenError();

    return $httpResponse;
  }
}

?>
