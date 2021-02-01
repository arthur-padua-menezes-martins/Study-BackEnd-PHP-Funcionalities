<?php

/** the process on the server was successfully requested */
trait Created {
  use CreatedSuccessfulRequest;

  /**
  * @param mixed $body response body definition
  * @return HttpResponseInterface default http response structure
  */
  public function created($body): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 201;
    $httpResponse->body = $body;
    $httpResponse->successMessage = new CreatedSuccessfulRequest();

    return $httpResponse;
  }
}

?>
