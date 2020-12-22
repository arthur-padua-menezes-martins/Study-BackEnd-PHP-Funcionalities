<?php

namespace lib\data\protocols\headers\cycle;

use lib\data\protocols\headers\start\StartHeadersInterface;
use lib\data\protocols\headers\set\SetHeadersInterface;

/** headers life cycle */
interface CycleHeadersInterface extends StartHeadersInterface, SetHeadersInterface {}

?>
