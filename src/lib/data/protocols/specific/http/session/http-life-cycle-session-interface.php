<?php

namespace lib\data\protocols\specific\http\session;

use lib\data\protocols\generic\control\has\GenericControlHasInterface;
use lib\data\protocols\generic\control\clear\GenericControlClearInterface;
use lib\data\protocols\specific\http\session\start\StartSessionInterface;
use lib\data\protocols\specific\http\session\regenerate\RegenerateSessionInterface;
use lib\data\protocols\specific\http\session\finalize\FinalizeSessionInterface;

/** session life cycle */
interface LifeCycleSessionInterface extends GenericControlHasInterface, GenericControlClearInterface, StartSessionInterface, RegenerateSessionInterface, FinalizeSessionInterface {}

?>
