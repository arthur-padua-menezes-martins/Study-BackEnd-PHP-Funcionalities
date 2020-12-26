<?php

namespace lib\infra\database\sql\driver\helper\persistence\transaction;

use lib\infra\database\sql\driver\protocols\persistence\transaction\PersistenceTransactionHelperInterface;
use lib\infra\database\sql\driver\helper\persistence\connection\PersistenceConnectionHelper;

/** auxiliary to apply transactions in persistence process */
class PersistenceTransactionHelper extends PersistenceConnectionHelper implements PersistenceTransactionHelperInterface {
  /** restricted constructor */
  private function __construct() {}

  /** start persistence transaction */
  public function start(): void {
    $this->client->beginTransaction();
  }

  /** cancel persistence transaction */
  public function cancel(): void {
    $this->client->rollBack();
  }

  /** finalize persistence transaction */
  public function finalize(): void {
    $this->client->commit();
  }
}

?>
