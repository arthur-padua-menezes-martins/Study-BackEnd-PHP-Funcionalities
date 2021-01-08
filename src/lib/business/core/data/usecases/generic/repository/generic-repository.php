<?php

namespace lib\business\core\data\usecases\generic\repository;

use lib\business\core\data\protocols\generic\repository\read\GenericReadRepositoryInterface;
use lib\business\core\data\protocols\generic\repository\write\GenericWriteRepositoryInterface;
use lib\business\core\data\protocols\generic\repository\update\GenericUpdateRepositoryInterface;

class GenericRepository implements GenericReadRepositoryInterface, GenericWriteRepositoryInterface, GenericUpdateRepositoryInterface {
  /** @var string collection table name */
  public string $collection;


}

?>