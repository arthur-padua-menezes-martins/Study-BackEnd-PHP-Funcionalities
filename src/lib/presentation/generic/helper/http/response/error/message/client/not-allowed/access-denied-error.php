<?php

/** error response type, access denied */
class AccessDeniedErrorMessage extends Exception {
  /** exception throwing */
  public function __construct () {
    parent::__construct('access denied');

    $this->name = 'AccessDeniedError';
  }
}

?>
