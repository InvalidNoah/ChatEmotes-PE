<?php

namespace ChatEmotes\task;

use ChatEmotes\Main;
use ChatEmotes\util\ConsoleUtil;
use ChatEmotes\util\UpdateChecker;
use pocketmine\scheduler\Task;

class StartupTask extends Task {

    private $plugin;

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
    }

    public function onRun(int $currentTick)
    {
        sleep(1);
        UpdateChecker::checkNewVersion("1.0.0");
    }

}