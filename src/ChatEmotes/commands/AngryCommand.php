<?php

namespace ChatEmotes\commands;

use ChatEmotes\ConsoleUtils;
use ChatEmotes\Main;
use ChatEmotes\sendEmote;
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
        $emotecfg = new Config($this->plugin->getDataFolder() . "emotes.yml", 2);
        if($sender instanceof Player){
            $this->plugin->sendAngry($sender);
        } else {
            $this->plugin->sendAlert($this->plugin->getConfig()->get("noIngame"));
        }
    }
}