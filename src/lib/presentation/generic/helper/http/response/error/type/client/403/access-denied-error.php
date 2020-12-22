<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;

/** error response type, access denied */
class AccessDeniedError extends Exception {
  public function __construct () {  
    parent::__construct('access denied');

    $this->name = 'AccessDeniedError';
  }
}

?>
