<?php

namespace lib\infra\database\sql\driver\generic\helper;

use PDO;
use lib\infra\database\sql\driver\generic\protocols\ConnectionHelperInterface;

/** auxiliary to connect the database */
class PersistenceConnectionHelper implements ConnectionHelperInterface {
  /**
  * @var PDO $client conection
  */
  protected PDO $client;

  /** restricted constructor */
  private function __construct() {}

  /** established connection */
  public function connect(): void {
    $connectionConfig = parse_ini_file('../../../../../../../app/main/config/database/connection.ini');

    $user = isset($connectionConfig['user']) ? $connectionConfig['user'] : NULL;
    $pass = isset($connectionConfig['pass']) ? $connectionConfig['pass'] : NULL;
    $name = isset($connectionConfig['name']) ? $connectionConfig['name'] : NULL;
    $host = isset($connectionConfig['host']) ? $connectionConfig['host'] : NULL;
    $type = isset($connectionConfig['type']) ? $connectionConfig['type'] : NULL;
    $port = isset($connectionConfig['port']) ? $connectionConfig['port'] : NULL;

    switch ($type) {
      case 'pgsql':
        $port = '5432';
        $client = new PDO("pgsql:dbname={$name}; user={$user}; password={$pass}; host=$host;port={$port}");
        break;
      case 'mysql':
        $port = '3306';
        $client = new PDO("mysql:host={$host};port={$port};dbname={$name}", $user, $pass);
        break;
      case 'sqlite':
        $client = new PDO("sqlite:{$name}");
        break;
    }
    
    $client->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->client = $client;
  }

  /**
  * verify if connection is established
  * @return boolean represents if persistence model is connected
  */
  public function is_connected(): bool {
    $isConnected = $this->client !== null;
    return $isConnected;
  }

  /**
  * get connection
  * @return PDO persistence connection
  */
  public function get_connection(): PDO {
    $isConnected = $this->is_connected();
  
    if (!$isConnected) {
      $this->connect();
    }

    return $this->client;
  }

  /** disconnect */
  public function disconnect(): void {
    $this->client = null;
  }
}

?>

