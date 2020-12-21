<?php

namespace lib\infra\database\sql\driver\generic\protocols;

/** auxiliary storage security with transactions */
interface TransactionHelperInterface {
  /** start storage transaction */
  public function startTransaction(): void;

  /** finalize storage transaction */
  public function finalizeTransaction(): void;

  /** cancel storage transaction */
  public function cancelTransaction(): void;
}

?>
