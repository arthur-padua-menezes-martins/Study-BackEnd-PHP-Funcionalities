<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponseInterface;

/** the server cannot process the request due to the not allowed error */
trait NotAllowed {
  /**
  * not allowed type error
  * @return HttpResponse default http response structure
  */
  public function not_allowed(Exception $errorMessage = null): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 403;
    $httpResponse->errorMessage = $errorMessage;

    return $httpResponse;
  }
}

?>
