<?php

namespace lib\data\protocols\session\cycle;

use lib\data\protocols\session\start\StartSessionInterface;
use lib\data\protocols\session\finalize\FinalizeSessionInterface;

/** session life cycle */
interface CycleSessionInterface extends StartSessionInterface, FinalizeSessionInterface {}

?>
