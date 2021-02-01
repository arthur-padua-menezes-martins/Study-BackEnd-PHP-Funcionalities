<?php

/** the process on the server was successfully requested */
trait NoContent {
  use NoContentSuccessfulRequest;

  /**
  * @param mixed $body response body definition
  * @return HttpResponseInterface default http response structure
  */
  public function no_content($body): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 204;
    $httpResponse->body = $body;
    $httpResponse->successMessage = new NoContentSuccessfulRequest();

    return $httpResponse;
  }
}

?>
