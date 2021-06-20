<?php

namespace ChatEmotes\util;

use pocketmine\Server;

class UpdateChecker {

    public static function checkNewVersion(string $version): void {
        sleep(1);
        Server::getInstance()->getLogger()->warning("§8[§aChat§cEmotes§8] §8▷ §f§lChecking for new Version§4§l...");
        sleep(1);
        Server::getInstance()->getLogger()->info("§8[§aChat§cEmotes§8] §8▷ §a§lNo new version out§4§l!");
        Server::getInstance()->getLogger()->info("§8[§aChat§cEmotes§8] §8▷ §a§lLatest Version§r§8: §2§l" . $version);
    }

}