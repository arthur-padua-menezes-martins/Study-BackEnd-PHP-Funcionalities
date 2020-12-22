<?php

namespace lib\presentation\generic\helper\http\response\success\type\successful;

/** successful response type, no content successful request */
class NoContentSuccessfulRequest {
  public function __construct () {
    $this->name = 'NoContentSuccessfulRequest';

    return 'no content, successful request, request has been received, wait';
  }
}

?>
