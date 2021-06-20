<?php


namespace ChatEmotes\commands;

use ChatEmotes\Main;
use ChatEmotes\util\ConsoleUtil;
use ChatEmotes\util\Emoter;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;
use pocketmine\utils\Config;

class SadCommand extends VanillaCommand {

    private $plugin;

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
        parent::__construct("sad", "Sende das du Traurig bist!", "/sad");
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        //$emoteCfg = new Config($this->plugin->getDataFolder() . "emotes.yml", 2);
        if($sender instanceof Player){
            Emoter::sendSad($sender, ":,(");
        } else {
            ConsoleUtil::sendAlert($this->plugin->getConfig()->get("prefix") . $this->plugin->getConfig()->get("noIngame"));
        }
    }
}