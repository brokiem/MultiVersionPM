<?php

namespace Bavfalcon9\MultiVersion;

use pocketmine\plugin\PluginBase;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use Bavfalcon9\MultiVersion\protocol\ProtocolVersion;

class Loader extends PluginBase {

    public function onEnable(): void {
        if (!in_array(ProtocolInfo::CURRENT_PROTOCOL, ProtocolVersion::SUPPORTED_SERVERS)) {
            throw new \RuntimeException("The server version is not supported by MultiVersion yet."); // throwing is easier to see
        }

        // hehe
        $this->getLogger()->notice("╔════════════════════════════╗");
        $this->getLogger()->notice(" ");
        $this->getLogger()->notice("   MultiVersion Enabled!");
        $this->getLogger()->notice("   ");
        $this->getLogger()->notice("╚════════════════════════════╝");
    }

    public function onDisable(): void {
        // hehe
        $this->getLogger()->notice("╔═════════════════════════════╗");
        $this->getLogger()->notice(" ");
        $this->getLogger()->notice("   MultiVersion Disabled!");
        $this->getLogger()->notice("   ");
        $this->getLogger()->notice("╚═════════════════════════════╝");
    }
}