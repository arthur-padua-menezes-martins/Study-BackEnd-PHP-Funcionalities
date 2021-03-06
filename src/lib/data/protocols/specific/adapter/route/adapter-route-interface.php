<?php
/** auxiliary to adapt route */
interface AdapterRouteInterface {
  /**
  * adapt route
  * @param mixed $request request to adapt
  * @param array $request_content request content to adapt
  */
  static public function adapt(HttpRequestInterface $request, array $request_content): void;
}

?>
