<?php


namespace skh6075\AdvancedNetherite\item\tool;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheriteSword extends Tool {


    public function __construct (int $meta = 0, int $count = 1) {
        parent::__construct (743, $meta, $count, 'Netherite Sword');
    }
    
    public function isSword () {
        return Tool::TIER_DIAMOND;
    }
    
    public function getMaxDurability (): int{
        return 407;
    }
}