<?php

namespace yexshaffed\github;

use pocketmine\Server;

class Say{

    public static function say(string $msg):void{
        Server::getInstance()->broadcastMessage($msg);
    }
}