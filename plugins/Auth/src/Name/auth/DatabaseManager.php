<?php

namespace Name\auth;

use pocketmine\utils\Config;

class DatabaseManager{
	
	private $mysqli;
	private $plugin;

	public function __construct(Main $plugin){
		$this->plugin = $plugin;
		$config = $plugin->getConfig()->get("database");

		$this->mysqli = new \mysqli(
			$config["host"],
			$config["user"],
			$config["password"],
			$config["db_name"],
			$config["port"]
		);

		if($this->mysqli->connect_error){
			$plugin->getLogger()->error("Ошибка подключения к базе данных" . $this->mysqli->connect_error);
			$plugin->getServer()->forceShutdown();
			return;
		}

		...
	}
}
?>