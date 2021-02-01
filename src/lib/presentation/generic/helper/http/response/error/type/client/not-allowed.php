<?php

/** the server cannot process the request due to the not allowed error */
trait NotAllowed {
  /**
  * not allowed type error
  * @return HttpResponseInterface default http response structure
  */
  public function not_allowed(Exception $errorMessage = null): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 403;
    $httpResponse->errorMessage = $errorMessage;

    return $httpResponse;
  }
}

?>
