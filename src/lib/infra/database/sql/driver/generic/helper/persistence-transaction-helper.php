<?php

namespace lib\infra\database\sql\driver\generic\helper;

use lib\infra\database\sql\driver\generic\protocols\TransactionHelperInterface;

/** auxiliary to apply transactions in persistence process */
class PersistenceTransactionHelper extends PersistenceConnectionHelper implements TransactionHelperInterface {
  /** restricted constructor */
  private function __construct() {}

  /** start persistence transaction */
  public function start_transaction(): void {
    $this->client->beginTransaction();
  }

  /** cancel persistence transaction */
  public function cancel_transaction(): void {
    $this->client->rollBack();
  }

  /** finalize persistence transaction */
  public function finalize_transaction(): void {
    $this->client->commit();
  }
}

?>
