<?php

namespace lib\presentation\generic\protocols\controller;

use lib\presentation\generic\protocols\http\request\HttpRequestInterface;
use lib\presentation\generic\protocols\http\response\HttpResponseInterface;

/**
* controller interface for the application rules type
*/
interface ControllerInterface {
  /**
  * application entry
  * @param HttpRequestInterface $httpRequest standard application request
  * @return HttpResponseInterface standard application response
  */
  public function handle(HttpRequestInterface $httpRequest): HttpResponseInterface;
}
