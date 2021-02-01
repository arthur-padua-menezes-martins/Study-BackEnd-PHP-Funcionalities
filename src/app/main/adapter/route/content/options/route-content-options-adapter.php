<?php

/** route options adaptation to application concept */
class RouteOptionsAdapter implements AdapterRouteContentInterface {
  /**
  * adapt request options to application options
  * @param array $request_content request options
  * @return HttpRequestOptionsInterface application options
  */
  static public function adapt(array $request_content): HttpRequestOptionsInterface {
    $options = new HttpRequestOptionsInterface();
    $options->host = $request_content['HTTP_HOST'];
    $options->method = $request_content['REQUEST_METHOD'];

    return $options;
  }
}

?>
