<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// This will trigger a notice error because $undefined_variable is not defined
echo $undefined_variable;
?>