<?php

namespace lib\infra\database\sql\driver\generic\protocols;

/** auxiliary storage security with transactions */
interface TransactionHelperInterface {
  /** start storage transaction */
  public function start_transaction(): void;

  /** cancel storage transaction */
  public function cancel_transaction(): void;

  /** finalize storage transaction */
  public function finalize_transaction(): void;
}

?>
