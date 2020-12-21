<?php 

namespace lib\infra\database\sql\driver\generic\helper;

use PDO;
use lib\infra\database\sql\driver\generic\helper\PersistenceTransactionHelper;

/** auxiliary to access persistence model */
class PersistenceHelper extends PersistenceTransactionHelper {
  /** class instance */
  private static self $_instance;

  /** restricted constructor */
  private function __construct() {}

  /**
  * get instance of the class
  * @returns {self} instance of the class
  */
  static function instance(): self {
    if (!self::$_instance) {
      self::$_instance = new self();
    }

    return self::$_instance;
  }
}

?>
