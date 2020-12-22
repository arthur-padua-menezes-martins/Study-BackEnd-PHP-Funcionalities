<?php

namespace lib\presentation\generic\helper\http\response\error\type\client;

use Exception;

/** error response type, invalid parameter */
class InvalidParameterError extends Exception {
  /**
  * @param string $parameter the invalid parameter (s)
  */
  public function __construct (string $parameter = '') {
    if ($parameter) {
      parent::__construct("correctly fill in the following field (s) {$parameter}");
    } else {
      parent::__construct('complete all the fields correctly');
    }

    $this->name = 'InvalidParameterError';
  }
}

?>
