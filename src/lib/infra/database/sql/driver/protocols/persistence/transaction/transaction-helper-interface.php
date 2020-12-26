<?php

namespace lib\infra\database\sql\driver\protocols\persistence\transaction;

use lib\data\protocols\generic\control\start\GenericControlStartInterface;
use lib\data\protocols\generic\control\cancel\GenericControlCancelInterface;
use lib\data\protocols\generic\control\finalize\GenericControlFinalizeInterface;

/** auxiliary storage security with transactions */
interface PersistenceTransactionHelperInterface extends GenericControlStartInterface, GenericControlCancelInterface, GenericControlFinalizeInterface {}

?>
