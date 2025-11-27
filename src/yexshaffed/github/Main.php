<?php

namespace yexshaffed\github;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    protected function onEnable(): void
    {
        $this->getLogger()->info("Yeah baby!");
    }
}
