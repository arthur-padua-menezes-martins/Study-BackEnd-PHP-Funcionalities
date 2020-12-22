<?php

namespace lib\presentation\generic\helper\http\response\error\status\server;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponse;
use lib\presentation\generic\helper\http\response\error\type\server\ServerError as ResponseServerError;

/**
* the server cannot process the request due to the unprocessable error
* @return HttpResponse default http response structure
*/
trait ServerError {
  use ResponseServerError;

  public function unauthorized(): HttpResponse {
    $httpResponse = new HttpResponse();
    $httpResponse->statusCode = 422;
    $httpResponse->errorMessage = new ResponseServerError();

    return $httpResponse;
  }
}

?>
