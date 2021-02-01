<?php

/** session life cycle */
interface LifeCycleSessionInterface extends GenericControlHasInterface, GenericControlClearInterface, StartSessionInterface, RegenerateSessionInterface, FinalizeSessionInterface {}

?>
