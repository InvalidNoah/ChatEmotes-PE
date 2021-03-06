<?php

namespace ChatEmotes\commands;

use ChatEmotes\ConsoleUtils;
use ChatEmotes\Main;
use ChatEmotes\util\ConsoleUtil;
use ChatEmotes\util\Emoter;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;
use pocketmine\utils\Config;

class AngryCommand extends VanillaCommand {

    private $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
        parent::__construct("angry", "sende das du Angry bist!", "/angry");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $p = $sender;
        $name = $p->getName();
        if($sender instanceof Player){
            Emoter::sendAngry($sender, "o.O");
        } else {
            ConsoleUtil::sendAlert($this->plugin->getConfig()->get("prefix") . $this->plugin->getConfig()->get("noIngame"));
        }
    }
}