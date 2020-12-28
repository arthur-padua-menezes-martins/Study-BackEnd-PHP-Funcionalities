<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use lib\presentation\generic\protocols\http\response\HttpResponseInterface;
use lib\presentation\generic\helper\http\response\error\message\client\UnprocessableErrorMessage;

/** the server cannot process the request due to the unprocessable error */
trait Unprocessable {
  use UnprocessableErrorMessage;

  /**
  * unprocessable type error
  * @return HttpResponseInterface default http response structure
  */
  public function unprocessable(): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 422;
    $httpResponse->errorMessage = new UnprocessableErrorMessage();

    return $httpResponse;
  }
}

?>
