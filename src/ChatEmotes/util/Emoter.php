<?php

namespace ChatEmotes\util;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Emoter {

    /**
     * @param string $happyMessage
     */
    public static function sendHappy(Player $p, string $happyMessage): void{
        Server::getInstance()->broadcastMessage($p->getName() . " §7ist gerade §2Glücklich §a" . $happyMessage);
    }

    public static function sendAngry(Player $p, string $angryMessage): void{
        Server::getInstance()->broadcastMessage($p->getName() . " §7ist gerade §4Böse §c" . $angryMessage);
    }

    public static function sendSad(Player $p, string $sadMessage): void {
        Server::getInstance()->broadcastMessage($p->getName() . " §7ist gerade §1Traurig §b" . $sadMessage);
    }

}