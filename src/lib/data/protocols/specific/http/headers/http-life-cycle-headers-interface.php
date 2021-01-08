<?php

namespace lib\data\protocols\specific\http\headers;

use lib\data\protocols\specific\http\headers\start\StartHeadersInterface;
use lib\data\protocols\specific\http\headers\set\SetHeadersInterface;
use lib\data\protocols\specific\http\headers\set\SetHeadersStatusCodeInterface;

/** headers life cycle */
interface LifeCycleHeadersInterface extends StartHeadersInterface, SetHeadersInterface, SetHeadersStatusCodeInterface {}

?>
