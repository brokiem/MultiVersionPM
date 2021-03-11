<?php

namespace Bavfalcon9\MultiVersion;

use Bavfalcon9\MultiVersion\protocol\ProtocolVersion;
use Bavfalcon9\MultiVersion\protocol\v428\v1_16_210;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase
{

    public function onEnable(): void
    {
        if (!in_array(ProtocolInfo::CURRENT_PROTOCOL, ProtocolVersion::SUPPORTED_SERVERS)) {
            throw new \RuntimeException("The server version is not supported by MultiVersion yet."); // throwing is easier to see
        }

        // register all protocol listener
        (new v1_16_210($this, 1));

        // hehe
        $this->getLogger()->notice("╔════════════════════════════╗");
        $this->getLogger()->notice(" ");
        $this->getLogger()->notice("    MultiVersion Enabled!");
        $this->getLogger()->notice("   ");
        $this->getLogger()->notice("╚════════════════════════════╝");
    }

    public function onDisable(): void {
        // hehe
        $this->getLogger()->notice("╔═════════════════════════════╗");
        $this->getLogger()->notice(" ");
        $this->getLogger()->notice("    MultiVersion Disabled!");
        $this->getLogger()->notice("   ");
        $this->getLogger()->notice("╚═════════════════════════════╝");
    }
}