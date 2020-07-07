<?php


namespace skh6075\AdvancedNetherite\item\tool;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheritePickaxe extends Tool {


    public function __construct (int $meta = 0, int $count = 1) {
        parent::__construct (745, $meta, $count, 'Netherite Pickaxe');
    }
    
    public function isPickaxe () {
        return Tool::TIER_DIAMOND;
    }
    
    public function getMaxDurability (): int{
        return 407;
    }
}