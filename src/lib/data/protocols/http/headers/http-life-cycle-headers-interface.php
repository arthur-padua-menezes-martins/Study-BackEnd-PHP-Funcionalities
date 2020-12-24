<?php

namespace lib\data\protocols\http\headers;

use lib\data\protocols\http\headers\start\StartHeadersInterface;
use lib\data\protocols\http\headers\set\SetHeadersInterface;

/** headers life cycle */
interface LifeCycleHeadersInterface extends StartHeadersInterface, SetHeadersInterface {}

?>
