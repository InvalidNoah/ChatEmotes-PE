<?php

namespace ChatEmotes\commands;

use ChatEmotes\ConsoleUtils;
use ChatEmotes\Main;
use ChatEmotes\sendEmote;
use ChatEmotes\util\ConsoleUtil;
use ChatEmotes\util\Emoter;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;
use pocketmine\utils\Config;

class HappyCommand extends VanillaCommand {

    private $plugin;

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
        parent::__construct("happy", "Sende das du Glücklich bist!", "/happy");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player){
            $p = $sender;
            Emoter::sendHappy($sender, "^^");
        } else {
            ConsoleUtil::sendAlert($this->plugin->getConfig()->get("prefix") . $this->plugin->getConfig()->get("noIngame"));
        }
    }
}