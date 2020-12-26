<?php

namespace lib\business\application\helper\http\response\error\type\server;

use lib\presentation\generic\protocols\http\response\HttpResponseInterface;
use lib\business\application\helper\http\response\error\message\server\ServerErrorMessage;

/** the server cannot process the request due to the server error */
trait ServerError {
  use ServerErrorMessage;

  /**
  * server error status
  * @return HttpResponse default http response structure
  */
  public function server_error(): HttpResponseInterface {
    $httpResponse = new HttpResponseInterface();
    $httpResponse->statusCode = 500;
    $httpResponse->errorMessage = new ServerErrorMessage();

    return $httpResponse;
  }
}

?>