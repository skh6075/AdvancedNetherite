<?php


namespace skh6075\AdvancedNetherite\item\armor;

use pocketmine\item\Armor;

class NetheriteBoots extends Armor {


    public function __construct (int $meta = 0) {
        parent::__construct (751, $meta, 'Netherite Boots');
    }
    
    /**
     * @return int
     */
    public function getDefensePoints (): int{
        return 3;
    }
    
    /**
     * @return int
     */
    public function getMaxDurability (): int{
        return 481;
    }
}