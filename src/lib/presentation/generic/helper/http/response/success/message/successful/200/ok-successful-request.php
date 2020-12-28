<?php

namespace lib\presentation\generic\helper\http\response\success\message\successful;

/** successful response type, successful request */
class OkSuccessfulRequest {
  public function __construct () {
    $this->name = 'OkSuccessfulRequest';

    return 'ok, successful request';
  }
}

?>
