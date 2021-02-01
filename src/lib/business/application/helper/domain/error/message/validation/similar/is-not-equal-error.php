<?php

/** error response type, is not equal */
class IsNotEqualErrorMessage extends Exception {
  /** exception throwing */
  public function __construct () {
    parent::__construct('verify if is not equal');

    $this->name = 'IsNotEqualErrorMessage';
  }
}

?>
