<?php

namespace androcyber;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\utils\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\command\PluginCommand;

class Main extends PluginBase implements Listener {
	
	public function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onDisable(): void{}
	
	public function PlayerDeath(PlayerDeathEvent $ev){
		$ev->setKeepInventory(true);
	}

}

?>