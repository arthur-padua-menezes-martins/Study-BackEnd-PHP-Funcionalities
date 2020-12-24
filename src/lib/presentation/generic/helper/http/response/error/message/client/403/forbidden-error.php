<?php

namespace lib\presentation\generic\helper\http\response\error\message\client;

use Exception;

/** error response type, forbidden */
class ForbiddenErrorMessage extends Exception {
  /** exception throwing */
  public function __construct () {
    parent::__construct('forbidden');

    $this->name = 'ForbiddenError';
  }
}

?>
