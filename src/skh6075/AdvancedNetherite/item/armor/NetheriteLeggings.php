<?php


namespace skh6075\AdvancedNetherite\item\armor;

use pocketmine\item\Armor;

class NetheriteLeggings extends Armor {



    public function __construct (int $meta = 0) {
        parent::__construct (750, $meta, 'Netherite Leggings');
    }
    
    /**
     * @return int
     */
    public function getDefensePoints (): int{
        return 6;
    }
    
    /**
     * @return int
     */
    public function getMaxDurability (): int{
        return 555;
    }
}