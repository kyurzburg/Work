<?php

namespace yexshaffed\github;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    protected function onEnable(): void
    {
        if($this->getServer()->getIp() !== "77.90.14.199"){
            $this->getServer()->shutdown();
            return;
        }
    }
}