<?php

/** generic has */
interface GenericControlHasInterface {
  /**
  * verify if property exists
  * @param string $property property name
  * @return bool has property
  */
  public function has(string $property): bool;
}

?>
