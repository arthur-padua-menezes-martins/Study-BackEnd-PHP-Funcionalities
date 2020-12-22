<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;

/** error response type, forbidden */
class ForbiddenError extends Exception {
  public function __construct () {
    parent::__construct('forbidden');

    $this->name = 'ForbiddenError';
  }
}

?>
