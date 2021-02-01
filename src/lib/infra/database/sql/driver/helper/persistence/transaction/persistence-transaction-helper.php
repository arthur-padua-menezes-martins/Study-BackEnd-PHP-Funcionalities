<?php

/** auxiliary to apply transactions in persistence process */
class PersistenceTransactionHelper extends PersistenceConnectionHelper implements PersistenceTransactionHelperInterface {
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
