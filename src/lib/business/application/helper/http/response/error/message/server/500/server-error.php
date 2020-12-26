<?php

namespace lib\business\application\helper\http\response\error\message\server;

use Exception;

/** error response type, server error */
class ServerErrorMessage extends Exception {
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
