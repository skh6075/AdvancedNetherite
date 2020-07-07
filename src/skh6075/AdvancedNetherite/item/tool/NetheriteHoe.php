<?php


namespace skh6075\AdvancedNtherite\item\tool;

use pocketmine\item\Tool;
use pocketmine\item\Durable;

class NetheriteHoe extends Tool {


    public function __construct (int $meta = 0, int $count = 1) {
        parent::__construct (747, $meta, $count, 'Netherite Hoe');
    }
    
    public function isHoe () {
        return Tool::TIER_DIAMOND;
    }
    
    public function getMaxDurability (): int{
        return 407;
    }
}