<?php
/**
 * Emulator of Dlink DES 3200-26
 */
class SNMP_320026_EMUL extends SNMP {
    public function state(): bool { return true; }

    public function num_ports(): int { return 26; }

    public function ports_up($num): bool {
        if ($num % 5 == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function ports_speed($num): int {
        if ($num > 24) {
            return 1000;
        } elseif ($num == 1) {
            return 10;
        } else {
            return 100;
        }
    }

    public function ports_description($num): string {
        return $this->ip." int #".$num;
    }
}
