<?php
declare(strict_types=1);

namespace Bavfalcon9\MultiVersion\protocol\v428;

use Bavfalcon9\MultiVersion\player\VersionedPlayer;
use Bavfalcon9\MultiVersion\protocol\ProtocolAdapter;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\server\DataPacketSendEvent;
use pocketmine\network\mcpe\protocol\DataPacket;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\Player;

class v1_16_210 extends ProtocolAdapter
{
    /** @var array */
    private array $playFabId = [];

    public function onConnecting(Player $session, DataPacket &$packet): void
    {
        // TODO: Implement onConnecting() method.
    }

    public function onIncoming(VersionedPlayer $player, DataPacket &$packet): void
    {
        // TODO: Implement onIncoming() method.
    }

    public function onOutgoing(VersionedPlayer $player, DataPacket &$packet): void
    {
        // TODO: Implement onOutgoing() method.
    }

    public function handleIncoming(DataPacketReceiveEvent $ev): void
    {
        $packet = $ev->getPacket();
        $player = $ev->getPlayer();

        if (($packet instanceof LoginPacket) and $player instanceof VersionedPlayer and $player->getProtocol() >= 428) {
            $this->playFabId[$player->getPlayer()->getName()] = $packet->clientData["PlayFabId"] ?? "";
        }
    }

    public function handleOutgoing(DataPacketSendEvent $ev): void
    {
        $packet = $ev->getPacket();
        $player = $ev->getPlayer();

        // TODO: translate packet
    }

}