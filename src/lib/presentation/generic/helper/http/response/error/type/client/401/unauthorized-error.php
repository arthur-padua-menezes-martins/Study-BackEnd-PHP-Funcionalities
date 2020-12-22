<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;

/** error response type, unauthorized */
class UnauthorizedError extends Exception {
  public function __construct () {
    parent::__construct('unauthorized');

    $this->name = 'UnauthorizedError';
  }
}

?>
