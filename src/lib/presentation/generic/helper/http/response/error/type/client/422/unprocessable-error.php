<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;

/** error response type, unprocessable */
class UnprocessableError extends Exception {
  public function __construct () {
    parent::__construct('instructions could not be processed');

    $this->name = 'UnprocessableError';
  }
}

?>
