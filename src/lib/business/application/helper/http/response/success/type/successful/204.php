<?php

namespace lib\business\application\helper\http\response\success\type\successful;

use lib\presentation\generic\protocols\http\response\HttpResponseInterface;
use lib\business\application\helper\http\response\success\message\successful\NoContentSuccessfulRequest;

/** the process on the server was successfully requested */
trait Accepted {
  use NoContentSuccessfulRequest;

  /**
  * @param mixed $body response body definition
  * @return HttpResponseInterface default http response structure
  */
  public function accepted($body): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 204;
    $httpResponse->body = $body;
    $httpResponse->successMessage = new NoContentSuccessfulRequest();

    return $httpResponse;
  }
}

?>
