<?php
require_once '../snmp_interface.php';
$test3200 = new SNMP_320026_EMUL("10.10.99.99");
var_dump($test3200->device_all_info());
