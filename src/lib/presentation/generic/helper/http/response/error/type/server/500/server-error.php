<?php

namespace lib\presentation\generic\helper\http\response\error\type\server;

use Exception;

/** error response type, server error */
class ServerError extends Exception {
  /**
  * @param {string} errorStack stack of error
  */
  public function __construct (string $errorStack = '') {
    parent::__construct('a problem affects the functioning of the server, try again later!');

    $this->name = 'ServerError';
    $this->stack = $errorStack;
  }
}

?>
