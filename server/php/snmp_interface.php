<?php
include_once "snmp_3200-26_emul.php";

/**
 * Main SNMP connection class
 * For use you mast have implementations for all your switch types
 */
abstract class SNMP {
    public $ip = "127.0.0.1";

    function __construct($ip) {
        $this->ip = $ip;
    }

    abstract public function state(): bool;
    // Numeric of ports
    abstract public function num_ports(): int;
    // Up / down of port($num - ports number)
    abstract public function ports_up($num): bool;
    // Ports speed in integer (10, 100, 1000 .. e.t.c.)
    abstract public function ports_speed($num): int;
    // Posts description
    abstract public function ports_description($num): string;
    
    // State of ports fn
    public function ports_all_info($num) {
        $ret = [
            "up" => $this->ports_up($num),
            "speed" => $this->ports_speed($num),
            "description" => $this->ports_description($num),
        ];
        return $ret;
    }

    public function device_all_info() {
        $ret = array();
        if( !$this->state() ){
            $ret["state"] = "down";
        } else {
            $ret["state"] = "up";
            for ($i = 1; $i <= $this->num_ports(); $i++ ) {
                $ret["ports"][$i] = $this->ports_all_info($i);
            }
        }
        return $ret;
    }
}
