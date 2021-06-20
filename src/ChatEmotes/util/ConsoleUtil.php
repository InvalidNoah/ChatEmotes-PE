<?php

namespace ChatEmotes\util;

use pocketmine\Server;

class ConsoleUtil {

    //:,(

    //ConsoleUtil::sendAlert($this->plugin->getConfig()->get("prefix") . $this->plugin->getConfig()->get("noIngame"));

    public static function sendLog(string $logMessage): void{
        Server::getInstance()->getLogger()->info($logMessage);
    }

    public static function sendAlert(string $alertMessage): void{
        Server::getInstance()->getLogger()->alert($alertMessage);
    }

    public static function sendWarn(string $warnMessage): void{
        Server::getInstance()->getLogger()->warning($warnMessage);
    }

    public static function sendStartupMessage(): void {
        Server::getInstance()->getLogger()->info("§8[§aChat§cEmotes§8] §8▷ §c§lHey, im the StartupTask ^^");
    }

}