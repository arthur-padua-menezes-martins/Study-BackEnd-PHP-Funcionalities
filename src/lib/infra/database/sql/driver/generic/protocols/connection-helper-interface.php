<?php

namespace lib\infra\database\sql\driver\generic\protocols;

use PDO;

/** auxiliary to access the storage */
interface ConnectionHelperInterface {
  /** connect to storage */
  public function connect(): void;

  /** verify if connection is established */
  public function isConnected(): bool;

  /** get storage connection */
  public function getConnection(): PDO;

  /** disconnect to storage */
  public function disconnect(): void;
}

?>
