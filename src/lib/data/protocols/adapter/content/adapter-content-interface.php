<?php

namespace lib\data\protocols\adapter\content;

/** auxiliary to adapt content */
interface AdapterContentInterface {
  /**
  * adapt content
  * @param mixed $reference reference to adapt
  * @param array $content content to adapt
  */
  static public function adapt($reference, array $content): void;
}

?>
