<?php

namespace JoinItems;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {
    
    public function onEnable(): void {
        $this->getLogger->info("Plugin has been enabled.");
    }
    public function onJoin(PlayerJoinEvent $event){
        $inv = $player->getInventory();
        $inv->clearAll();
        
        $hub = Item::get(345, 1, 1);
        $hub->setCustomName(TextFormat::GOLD . "Server Selector!");
        $inv->setItem(0, $hub);
    }
}
