<?php

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
