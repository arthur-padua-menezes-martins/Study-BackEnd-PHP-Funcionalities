<?php

/** route body adaptation to application concept */
class RouteBodyAdapter implements AdapterRouteContentInterface {
  /**
  * adapt request body to application body 
  * @param array $request_content request body
  * @return HttpRequestBodyInterface application body
  */
  static public function adapt(array $request_content): HttpRequestBodyInterface {
    $body = new HttpRequestBodyInterface();
    
    foreach ($request_content as $key => $value) {
      $body->$key = $value;
    }

    return $body;
  }
}

?>
