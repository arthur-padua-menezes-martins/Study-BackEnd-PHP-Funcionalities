<?php

namespace lib\business\application\helper\http\response\error\message\client;

use Exception;

/** error response type, unauthorized */
class UnauthorizedErrorMessage extends Exception {
  /** exception throwing */
  public function __construct () {
    parent::__construct('unauthorized');

    $this->name = 'UnauthorizedError';
  }
}

?>
