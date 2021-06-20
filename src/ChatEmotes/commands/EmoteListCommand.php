<?php

namespace ChatEmotes\commands;

use ChatEmotes\Main;
use ChatEmotes\util\ConsoleUtil;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\command\utils\CommandException;
use pocketmine\Player;

class EmoteListCommand extends VanillaCommand {

    private $plugin;

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
        parent::__construct("emotelist", "sends you the Emotelist", "/emotelist or emlist", ["emlist"]);
    }


    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player){
            $p = $sender;
            $p->sendMessage("§8");
            $p->sendMessage($this->plugin->getConfig()->get("prefix") . "§7Open now a Gui");
            sleep(1);
            $this->plugin->openEmotesList($p);
        } else {
            ConsoleUtil::sendAlert($this->plugin->getConfig()->get("prefix") . $this->plugin->getConfig()->get("noIngame"));
        }
    }
}