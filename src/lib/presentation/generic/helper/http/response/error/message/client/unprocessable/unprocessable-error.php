<?php

/** error response type, unprocessable */
class UnprocessableErrorMessage extends Exception {
  /** exception throwing */
  public function __construct () {
    parent::__construct('instructions could not be processed');

    $this->name = 'UnprocessableError';
  }
}

?>
