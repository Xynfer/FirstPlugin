<?php
namespace Xynfer\HelloWrld\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->$getLogger()->$info("This Plugin is Enable");
  }
  public function onDisable(){
      $this->$getLogger()->$info("This Plugin is Disable");
    }
    
  public function onCommand(CommandSender $sender, Command $cmd, String $label, args $args){
    if($cmd->getName == "Hello"){
    $sender->sendMessage("Hello $sender->getname()");
    }
  }
}