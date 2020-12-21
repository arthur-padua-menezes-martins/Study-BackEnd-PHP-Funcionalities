<?php

namespace lib\infra\database\sql\driver\generic\helper;

use lib\infra\database\sql\driver\generic\protocols\TransactionHelperInterface;

/** auxiliary to apply transactions in persistence process */
class PersistenceTransactionHelper extends PersistenceConnectionHelper implements TransactionHelperInterface {
  private function __construct() {}

  /** start persistence transaction */
  public function startTransaction(): void {
    $this->client->beginTransaction();
  }

  /** finalize persistence transaction */
  public function finalizeTransaction(): void {
    $this->client->commit();
  }

  /** cancel persistence transaction */
  public function cancelTransaction(): void {
    $this->client->rollBack();
  }
}

?>
