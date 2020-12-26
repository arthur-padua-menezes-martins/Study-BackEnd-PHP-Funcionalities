<?php

namespace lib\business\application\helper\http\response\success\message\successful;

/** successful response type, no content successful request */
class NoContentSuccessfulRequest {
  public function __construct () {
    $this->name = 'NoContentSuccessfulRequest';

    return 'no content, successful request, request has been received, wait';
  }
}

?>
