<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponseInterface;
use lib\presentation\generic\helper\http\response\error\message\client\UnprocessableErrorMessage;

/** the server cannot process the request due to the unprocessable error */
trait Unprocessable {
  use UnprocessableErrorMessage;

  /**
  * unauthorized status
  * @return HttpResponse default http response structure
  */
  public function unauthorized(): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 422;
    $httpResponse->errorMessage = new UnprocessableErrorMessage();

    return $httpResponse;
  }
}

?>
