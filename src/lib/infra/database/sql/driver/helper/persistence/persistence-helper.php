<?php 

namespace lib\infra\database\sql\driver\helper\persistence;

use PDO;
use lib\infra\database\sql\driver\helper\persistence\transaction\PersistenceTransactionHelper;

/** auxiliary to access persistence model */
class PersistenceHelper extends PersistenceTransactionHelper {
  /**
  * @var self $_instance class instance
  */
  private static self $_instance;

  /** restricted constructor */
  private function __construct() {}

  /**
  * get instance of the class
  * @return self instance of the class
  */
  public static function instance(): self {
    if (!self::$_instance) {
      self::$_instance = new self();
    }

    return self::$_instance;
  }
}

?>
