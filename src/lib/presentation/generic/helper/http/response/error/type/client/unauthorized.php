<?php

/** the server cannot process the request due to the unauthorized error */
trait Unauthorized {
  use UnauthorizedErrorMessage;

  /**
  * unauthorized type error
  * @return HttpResponseInterface default http response structure
  */
  public function unauthorized(): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 401;
    $httpResponse->errorMessage = new UnauthorizedErrorMessage();

    return $httpResponse;
  }
}

?>
