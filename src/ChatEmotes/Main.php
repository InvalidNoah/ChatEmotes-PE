<?php

namespace ChatEmotes;

use ChatEmotes\commands\AngryCommand;
use ChatEmotes\commands\HappyCommand;
use ChatEmotes\commands\SadCommand;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase {

    public function onEnable(){
        @mkdir($this->getDataFolder());
        $this->getResource("emotes.yml");
        $this->saveResource("emotes.yml");
        $this->getLogger()->info($this->getConfig()->get("prefix") . "§aPlugin geladen§4!");
        $this->getServer()->getPluginManager()->registerEvents(new EmotesListener($this), $this);
        $this->registerCommands();
    }

    public function registerCommands(){
        $map = $this->getServer()->getCommandMap();
        $map->register("sad", new SadCommand($this));
        $map->register("angry", new AngryCommand($this));
        $map->register("happy", new HappyCommand($this));
    }

    public function sendHappy(Player $p){
        $this->getServer()->broadcastMessage($this->getConfig()->get("prefix") . "§7" . $p->getName() . " §r " . $this->getConfig()->get("EmoteHappy"));
    }

    public function sendSad(Player $p){
        $this->getServer()->broadcastMessage($this->getConfig()->get("prefix") . "§7" . $p->getName() . " §r " . $this->getConfig()->get("EmoteSad"));
    }

    public function sendAngry(Player $p){
        $emoteCfg = new Config($this->getDataFolder() . "emotes.yml", 2);
        $this->getServer()->broadcastMessage($this->getConfig()->get("prefix") . "§7" . $p->getName() . " §r " . $this->getConfig()->get("EmoteAngry"));
    }

    public function sendAlert($message){
        $this->getLogger()->alert($this->getConfig()->get("prefix") . $message);
    }

}