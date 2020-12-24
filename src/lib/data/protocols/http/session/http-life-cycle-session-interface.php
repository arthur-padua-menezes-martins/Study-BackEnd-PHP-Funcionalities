<?php

namespace lib\data\protocols\http\session;

use lib\data\protocols\http\session\start\StartSessionInterface;
use lib\data\protocols\http\session\control\ControlSessionInterface;
use lib\data\protocols\http\session\finalize\FinalizeSessionInterface;

/** session life cycle */
interface LifeCycleSessionInterface extends StartSessionInterface, ControlSessionInterface, FinalizeSessionInterface {}

?>
