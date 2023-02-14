<?php

declare(strict_types=1);

namespace dpgenx\animalcoins;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;

class AnimalCoins extends PluginBase {

    public static $instance;

    public function onEnable(): void
    {
        self::$instance = $this;
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        parent::onEnable(); // TODO: Change the autogenerated stub
        $this->saveDefaultConfig();
        $this->saveResource("config.yml");
        $this->config = new Config($this->getDataFolder() . "config.yml");
        $this->getServer()->getLogger()->info("Plugin Enabled by DpGenx!");
    }

    public function onDisable(): void
    {
        parent::onDisable(); // TODO: Change the autogenerated stub
        $this->getServer()->getLogger()->info("Plugin Disabled by DpGenx!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        return parent::onCommand($sender, $command, $label, $args); // TODO: Change the autogenerated stub
        switch ($cmd->getName()){
            case "animalcoins":
                $player->sendMessage("§b=== Animal Coins ===");
                $player->sendMessage("§7-> Author: DpGenx");
                $player->sendMessage("§7-> Website: https://dpgenx/pocketmine/plugins");
                $player->sendMessage("§7-> Description: bunuh Mob / Monster untuk Mendapatkan Coins");
                $player->sendMessage("§b=== Animal Coins ===");

                break;
        }
        return true;
    }

    public static function getInstance(): AnimalCoins {
        return self::$instance;
    }

}