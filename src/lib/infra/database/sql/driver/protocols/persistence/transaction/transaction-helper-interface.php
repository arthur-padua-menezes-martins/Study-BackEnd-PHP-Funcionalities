<?php

/** auxiliary storage security with transactions */
interface PersistenceTransactionHelperInterface {
  /** start transaction */
  public function start_transaction(): void;

  /** cancel transaction */
  public function cancel_transaction(): void;

  /** finalize transaction */
  public function finalize_transaction(): void;
}

?>
