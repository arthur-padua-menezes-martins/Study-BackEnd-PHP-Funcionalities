<?php

/** auxiliary to adapt route content */
abstract class AdapterRouteContentInterface {
  /**
  * adapt route content
  * @param array $request_content request content to adapt
  */
  abstract static public function adapt(array $request_content);
}

?>
