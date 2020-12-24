<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;
use lib\presentation\generic\protocols\http\response\HttpResponseInterface;
use lib\presentation\generic\helper\http\response\error\message\client\ForbiddenErrorMessage;

/** the server cannot process the request due to the forbidden error */
trait Forbidden {
  use ForbiddenErrorMessage;

  /**
  * forbidden status
  * @return HttpResponse default http response structure
  */
  public function forbidden(): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 403;
    $httpResponse->errorMessage = new ForbiddenErrorMessage();

    return $httpResponse;
  }
}

?>
