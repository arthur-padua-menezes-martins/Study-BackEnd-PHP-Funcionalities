<?php

/** successful response type, accepted successful request */
class AcceptedSuccessfulRequest {
  public function __construct () {
    $this->name = 'AcceptedSuccessfulRequest';

    return 'accepted, successful request, request has been received but cannot act yet';
  }
}

?>
