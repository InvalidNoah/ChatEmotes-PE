<?php

namespace ChatEmotes\commands;

use ChatEmotes\Main;
use ChatEmotes\util\ConsoleUtil;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;

class ChatEmotesInfo extends VanillaCommand {

    private $plugn;

    public function __construct(Main $plugin){
        $this->plugn = $plugin;
        parent::__construct("chatemotes", "sends a Information about the Plugin", "/chatemotes or /ce", ["ce"]);
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        //Send a message to the chat with which other people know that they are angry
        if($sender instanceof Player){
            $p = $sender;
            $p->sendMessage("§8");
            $p->sendMessage($this->plugn->getConfig()->get("prefix") . "§bDeveloper§8: §fbyNoahLP");
            $p->sendMessage($this->plugn->getConfig()->get("prefix") . "§bVersion§8: §f" . $this->plugn->getDescription()->getVersion());
            $p->sendMessage($this->plugn->getConfig()->get("prefix") . "§bDescription§8: §f" . $this->plugn->getDescription()->getDescription());
            $p->sendMessage($this->plugn->getConfig()->get("prefix") . "§bWebsite§8: §f" . $this->plugn->getDescription()->getWebsite());
            $p->sendMessage("§8");
        } else {
            ConsoleUtil::sendAlert($this->plugn->getConfig()->get("noIngame"));
        }
    }
}