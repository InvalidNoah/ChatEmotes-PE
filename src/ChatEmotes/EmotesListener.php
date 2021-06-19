<?php

namespace ChatEmotes;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJumpEvent;

class EmotesListener implements Listener{

    private $plugin;

    public  function __construct(Main $plugin){
        $this->plugin = $plugin;
    }

    public function onChat(PlayerChatEvent $e){
        $msg = $e->getMessage();
        $format = $e->getFormat();

        $p = $e->getPlayer();
        if($p->hasPermission("ce.sad")){
            $e->setFormat("§8[§1SAD§8] §8▷ §7" . $p->getName() . " §8| §f" . $msg);
        } else if($p->hasPermission("ce.angry")){
            $e->setFormat("§8[§cANGRY§8] §8▷ §7" . $p->getName() . " §8| §f" . $msg);
        } else if($p->hasPermission("ce.happy")){
            $e->setFormat("§8[§aHAPPY§8] §8▷ §7" . $p->getName() . " §8| §f" . $msg);
        } else {
            $e->setCancelled(false);
            $e->setFormat("§8[§cNONE§8] §8▷ §7" . $p->getName() . " §8| §f" . $msg);
        }
    }
}