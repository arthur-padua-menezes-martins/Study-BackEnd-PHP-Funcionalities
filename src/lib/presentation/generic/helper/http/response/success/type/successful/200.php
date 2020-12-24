<?php

namespace lib\presentation\generic\helper\http\response\success\type\successful;

use lib\presentation\generic\protocols\http\response\HttpResponseInterface;
use lib\presentation\generic\helper\http\response\success\message\successful\OkSuccessfulRequest;

/** the process on the server was successfully requested */
trait Ok {
  use OkSuccessfulRequest;
  /**
  * @param mixed $body response body definition
  * @return HttpResponseInterface default http response structure
  */
  public function ok($body): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 200;
    $httpResponse->body = $body;
    $httpResponse->successMessage = new OkSuccessfulRequest();

    return $httpResponse;
  }
}

?>
