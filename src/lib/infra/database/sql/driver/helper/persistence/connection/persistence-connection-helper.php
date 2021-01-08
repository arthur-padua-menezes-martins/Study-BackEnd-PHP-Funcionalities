<?php

namespace lib\infra\database\sql\driver\helper\persistence\connection;

use PDO;
use lib\infra\database\sql\driver\protocols\persistence\connection\PersistenceConnectionHelperInterface;

/** auxiliary to connect the database */
class PersistenceConnectionHelper implements PersistenceConnectionHelperInterface {
  /** @var PDO $client database conection */
  protected PDO $client;

  /** restricted constructor */
  private function __construct() {}

  /** established connection */
  public function connect(): void {
    $connection_config = parse_ini_file('../../../../../../../app/main/config/database/connection.ini');

    $user = isset($connection_config['user']) ? $connection_config['user'] : NULL;
    $pass = isset($connection_config['pass']) ? $connection_config['pass'] : NULL;
    $name = isset($connection_config['name']) ? $connection_config['name'] : NULL;
    $host = isset($connection_config['host']) ? $connection_config['host'] : NULL;
    $type = isset($connection_config['type']) ? $connection_config['type'] : NULL;
    $port = isset($connection_config['port']) ? $connection_config['port'] : NULL;

    switch ($type) {
      case 'pgsql':
        $port = '5432';
        $client = new PDO("pgsql:dbname={$name};user={$user};password={$pass};host={$host};port={$port}");
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
    $is_connected = $this->client !== null;
    return $is_connected;
  }

  /**
  * get connection
  * @return PDO persistence connection
  */
  public function get_connection(): PDO {
    $is_connected = $this->is_connected();
  
    if (!$is_connected) {
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

