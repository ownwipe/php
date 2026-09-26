<?php
namespace Name\hello;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {
    public function onEnable(): void {
        $this->getLogger()->info("Плагин helloPlayer запущен.");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onPlayerJoin(PlayerJoinEvent $event): void {
        $title = TextFormat::GREEN . "Приветствуем на сервере!";
        $subtitle = TextFormat::RED . $event->getPlayer()->getName();
        $event->getPlayer()->sendTitle($title, $subtitle);
        $event->getPlayer()->sendMessage(TextFormat::GREEN . "Приветствуем на сервере, " . $event->getPlayer()->getName() . "!");
    }
}
?>