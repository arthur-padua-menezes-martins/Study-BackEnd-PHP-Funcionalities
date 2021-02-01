<?php

/** the server cannot process the request due to the server error */
trait ServerError {
  use ServerErrorMessage;

  /**
  * server error status
  * @return HttpResponseInterface default http response structure
  */
  public function server_error(): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 500;
    $httpResponse->errorMessage = new ServerErrorMessage();

    return $httpResponse;
  }
}

?>
