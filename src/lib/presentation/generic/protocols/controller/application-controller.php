<?php

namespace lib\presentation\generic\protocols\controller;

use lib\presentation\generic\protocols\http\request\HttpRequest;
use lib\presentation\generic\protocols\http\response\HttpResponse;

/**
* controller interface for the application rules type
*/
interface ControllerInterface {
  /**
  * @method handle() main application entry
  * @param HttpRequest $httpRequest standard application request
  * @return HttpResponse standard application response
  */
  public function handle(HttpRequest $httpRequest): HttpResponse;
}
