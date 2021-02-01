<?php
/** error response type, missing parameter */
class MissingParameterErrorMessage extends Exception {
  /**
  * exception throwing
  * @param string $parameter the missing parameter (s)
  */
  public function __construct (string $parameter = '') {
    if ($parameter) {
      parent::__construct("correctly fill in the following field (s) {$parameter}");
    } else {
      parent::__construct('complete all the fields correctly');
    }

    $this->name = 'MissingParameterError';
  }
}

?>
