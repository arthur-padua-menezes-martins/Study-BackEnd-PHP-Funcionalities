<?php

namespace lib\business\application\helper\domain\error\message\validation\similar;

use Exception;

/** error response type, is equal */
class IsEqualErrorMessage extends Exception {
  /** exception throwing */
  public function __construct () {
    parent::__construct('verify if is equal');

    $this->name = 'IsEqualErrorMessage';
  }
}

?>
