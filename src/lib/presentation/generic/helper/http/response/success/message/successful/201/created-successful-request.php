<?php

/** successful response type, created successful request */
class CreatedSuccessfulRequest {
  public function __construct () {
    $this->name = 'CreatedSuccessfulRequest';

    return 'created, successful request, a new resource was created';
  }
}

?>
